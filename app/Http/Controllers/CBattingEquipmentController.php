<?php

namespace App\Http\Controllers;

use App\C_batting_equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CBattingEquipmentController extends Controller
{
    public function index()
    {
        //
        $c_b_e=C_batting_equipment::all();
        return view('Cricket.c_bat_equip',compact('c_b_e'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
        if($request->hasFile('image')){
            //GetFilename with Extension
            $filenameWithExt=$request->file('image')->getClientOriginalName();
            //Get Just Filename
            $filename= pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //Get just Ext
            $extension=$request->file('image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            //Upload Image
            $path= $request->file('image')->storeAs('public/images',$fileNameToStore);

        }else
        {
            $fileNameToStore= 'noimage.jpg';
        }

        $c_b_e=new C_batting_equipment();
        if($request->hasfile('image')){
            $c_b_e->image="http://localhost/lar_sports/public/storage/images/".$fileNameToStore;
        }
        $c_b_e->price=$request['price'];
        $c_b_e->save();

        //$box_cloth=box_cloth::all();
        //return view('box_cloths',compact('box_cloth'));
        $c_b_e=C_batting_equipment::all();
        return view('Cricket.c_bat_equip',compact('c_b_e'));
    }

    

    public function show()
    {
        //
        $c_b_e=C_batting_equipment::all();
        return view('Cricket.c_bat_equip_add',compact('c_b_e'));

    }

    
    public function edit(Box_cloth $box_cloth)
    {
        //
    }

    
    public function update(Request $request, Box_cloth $box_cloth)
    {
        //
    }

    
    public function destroy($id)
    {
        //
        
        $c_b_e=C_batting_equipment::find($id);

        $path=str_replace("http://localhost/lar_sports/public/storage/images/", '', $c_b_e->image);
        Storage::delete('public/images/'.$path);
        
        /*dd(str_replace("http://localhost/lar_sports/public/storage/images/", "", $box_cloth->image));*/
        $c_b_e->delete();
        //DB::delete('delete from box_cloths where id= ?',[$id]);
        //box_

        $c_b_e=C_batting_equipment::all();
        return view('Cricket.c_bat_equip',compact('c_b_e'));
    }
}
