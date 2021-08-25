<?php

namespace App\Http\Controllers;

use App\Box_cloth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class BoxClothController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $box_cloth=box_cloth::all();
        return view('box_cloths',compact('box_cloth'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        $box_cloth=new box_cloth();
        if($request->hasfile('image')){
            $box_cloth->image="http://localhost/projects/lar_sports/storage/app/public/images/".$fileNameToStore;
        }
        $box_cloth->price=$request['price'];
        $box_cloth->save();

        //$box_cloth=box_cloth::all();
        //return view('box_cloths',compact('box_cloth'));
        $box_cloth=Box_cloth::all();
        return view('box_cloths',compact('box_cloth'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Box_cloth  $box_cloth
     * @return \Illuminate\Http\Response
     */
    // public function show(Box_cloth $box_cloth)
    // {
    //     //
    // }

    public function show()
    {
        //
        $box_cloth=box_cloth::all();
        return view('b_clothadd',compact('box_cloth'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Box_cloth  $box_cloth
     * @return \Illuminate\Http\Response
     */
    public function edit(Box_cloth $box_cloth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Box_cloth  $box_cloth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Box_cloth $box_cloth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Box_cloth  $box_cloth
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
        $box_cloth=Box_cloth::find($id);

        $path=str_replace("http://localhost/projects/lar_sports/storage/app/public/images/", '', $box_cloth->image);
        Storage::delete('public/images/'.$path);
        
        /*dd(str_replace("http://localhost/lar_sports/public/storage/images/", "", $box_cloth->image));*/
        $box_cloth->delete();
        //DB::delete('delete from box_cloths where id= ?',[$id]);
        //box_

        $box_cloth=Box_cloth::all();
        return view('box_cloths',compact('box_cloth'));
    }
}
