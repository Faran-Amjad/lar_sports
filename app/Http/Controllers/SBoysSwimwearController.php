<?php

namespace App\Http\Controllers;

use App\S_boys_swimwear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SBoysSwimwearController extends Controller
{
    public function index()
    {
        //
        $s_b_s=S_boys_swimwear::all();
        return view('Swimming.s_boys_swimwear',compact('s_b_s'));
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

        $s_b_s=new S_boys_swimwear();
        if($request->hasfile('image')){
            $s_b_s->image="http://localhost/lar_sports/public/storage/images/".$fileNameToStore;
        }
        $s_b_s->price=$request['price'];
        $s_b_s->save();

        //$box_cloth=box_cloth::all();
        //return view('box_cloths',compact('box_cloth'));
        $s_b_s=S_boys_swimwear::all();
        return view('Swimming.s_boys_swimwear',compact('s_b_s'));
    }

    

    public function show()
    {
        //
        $s_b_s=S_boys_swimwear::all();
        return view('Swimming.s_boys_swimwear_add',compact('s_b_s'));

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
        
        $s_b_s=S_boys_swimwear::find($id);

        $path=str_replace("http://localhost/lar_sports/public/storage/images/", '', $s_b_s->image);
        Storage::delete('public/images/'.$path);
        
        /*dd(str_replace("http://localhost/lar_sports/public/storage/images/", "", $box_cloth->image));*/
        $s_b_s->delete();
        //DB::delete('delete from box_cloths where id= ?',[$id]);
        //box_

        $s_b_s=S_boys_swimwear::all();
        return view('Swimming.s_boys_swimwear',compact('s_b_s'));
    }
}
