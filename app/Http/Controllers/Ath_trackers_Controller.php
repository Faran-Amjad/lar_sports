<?php

namespace App\Http\Controllers;
use App\Ath_tracker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class Ath_trackers_Controller extends Controller
{
    //

    public function index()
    {
        //
        $a_t=Ath_tracker::all();
        return view('Athletics.ath_trackers',compact('a_t'));
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

        $a_t=new Ath_tracker();
        if($request->hasfile('image')){
            $a_t->image="http://localhost/lar_sports/public/storage/images/".$fileNameToStore;
        }
        $a_t->price=$request['price'];
        $a_t->save();

        //$box_cloth=box_cloth::all();
        //return view('box_cloths',compact('box_cloth'));
        $a_t=Ath_tracker::all();
        return view('Athletics.ath_trackers',compact('a_t'));
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
        $a_t=Ath_tracker::all();
        return view('Athletics.a_trackersadd',compact('a_t'));

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
        
        $a_t=Ath_tracker::find($id);

        $path=str_replace("http://localhost/lar_sports/public/storage/images/", '', $a_t->image);
        Storage::delete('public/images/'.$path);
        
        /*dd(str_replace("http://localhost/lar_sports/public/storage/images/", "", $box_cloth->image));*/
        $a_t->delete();
        //DB::delete('delete from box_cloths where id= ?',[$id]);
        //box_

        $a_t=Ath_tracker::all();
        return view('Athletics.ath_trackers',compact('a_t'));
    }
}
