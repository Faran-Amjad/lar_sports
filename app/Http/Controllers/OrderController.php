<?php

namespace App\Http\Controllers;

use App\Order;
use App\Box_Cloth;
use App\Ath_tracker;
use App\C_batting_equipment;
use App\S_boys_swimwear;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$orders= Order::All();
        
        $oid= Order::where('user_id',session('uid'))->get();
        $d=0;
        //dd($oid);
        return view('cart',compact('oid','d'));


    }

    public function check_coupon(Request $request)

    {

        $oid= Order::where('user_id',session('uid'))->get();

        $v=$request['cpn'];
        // dd($v);
        if($v=='save10')
        {
            // echo 'hello';
            $d=10;
            return view('cart',compact('oid','d'));

        }
        else if($v=='save20')
        {
            // echo 'helo2';
            $d=20;
            return view('cart',compact('oid','d'));
        }
        else if($v=='save30')
        {
            // echo 'helo3';
            $d=30;
            return view('cart',compact('oid','d'));
        }
    }


public function check($id)
{
    // $oid=new Order();
    // dd($id);

    //$var=User::where('pword',$pass)->get(['id'])->toArray();
    //$bid= Box_Cloth::where('id',session('bid'))->get();
    //dd($bid);
     //return view('check',compact('bid'));
    $cid=$id;
    //dd($cid);
        return view('check',compact('cid'));

}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id,$cat_id)
    {
        //
        
        
        //}
        // dd(session('uid'));
        if(session('uid')==null){
        
                
            echo "You are not Logged in";
            //return redirect('/');
        }
        else
        {

            $quantity=$request['num'];
            $size=$request['size'];

            // dd($quantity);
            //dd($size);

          $oid= new Order();
        // $v= session('uid');
        $oid->user_id=session('uid')[0]['id'];
        $oid->quantity=$quantity;
        $oid->size=$size;
        //dd(session('uid')[0]['id']);
        // $var=Box_Cloth::where('id',$id);
        //u$v=Box_cloth;
        if($cat_id==0)
        {
        $var=Box_cloth::find($id);
        }
        else if($cat_id==1)
        {
          $var=Ath_tracker::find($id);  
        }
        else if($cat_id==2)
        {
            $var=C_batting_equipment::find($id);
        }
        else if($cat_id==3)
        {
            $var=S_boys_swimwear::find($id);
        }
        // dd($var->price);
        $oid->price=$var->price;

        $product=str_replace("http://localhost/projects/lar_sports/storage/app/public/images/","",$var->image);
        $product=str_replace(".PNG","",$product);
        $product=str_replace(str_split('_0123456789'),"",$product);

        $oid->product=$product;
        // $var=BoxClothController::where('id',('uid'))->get(['id']);
        $oid->save(); 

        return view('orders'); 
        }

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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
        $order->delete();

        return redirect('/order'); 
    }
}
