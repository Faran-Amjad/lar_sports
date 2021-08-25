<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

use DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin');
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
        $admin= new Admin();
        $admin->username = $request['username'];
        $admin->password = $request['pass'];
        //dd('request('username')');
        //dd(auth()->user()->id);
        $admin->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    /*public function show(Admin $admin)
    {
        //
        //$id= ;
        //$admin= Admin::find($id);
        return view('ausers')->with('admin',$admin);
    }*/

    public function showall()
    {
        $admins=Admin::all();
        return view('ausers',compact('admins'));
    }
    public function show($id)
    {
        //
        //$id= ;
        $admins= Admin::find($id);
        //dd($admins);
        return view('ashow')->with('admins',$admins);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $admin= Admin::find($id);

        return view('admin.aedit')->with('admin',$admin);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    /*public function update(Request $request, Admin $admin)
    {
        //
    }*/
    public function update(Request $request, $id)
    {
        //
        $admin= Admin::find($id);
        $admin->username = $request->input('username');
        $admin->password = $request->input('pass');
        $admin->update();

        return redirect('/show-all');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */

    public function destroy(Admin $admin)
    {
        $admin->delete();

        return redirect('/show-all');
    }
    /*public function destroy($id)
    {
        //
        //$admin= Admin::find($id);
        //$id=$admin->id;
        
        $dadmin= Admin::find($id);
        $dadmin->delete();

        return redirect('/show-all');
    }*/

    public function checkmail(Request $request,Admin $admin)
    {
        //$admin= Admin::where('username',$request['username']);
        //dd($admin->id);
        $un=$request['username'];
    $pass=$request['pass'];

    $un2= Admin::where('username',$un)->first();
    $p2= Admin::where('password',$pass)->first();
    
    /*if($un2 && $p2)
    {
        $uid2= Admin::where('username',$un)->get(['id']);
        //dd($uid2);
    }*/

    //$p2=Admin::where('password', request('pass'))->first();

    //echo $pass ;
        //return count($p2);

/*if (Admin::where('password', $pass)->first())
    echo " It exists";
else
    echo " It doesn't exists";*/
session_start();
    if($un2 && $p2)
        {
            //sleep(5);
            echo "welcome";
            //sleep(8);

            //Session::put('key', 'true');
            //$_SESSION['aid']= 'true';

            return view('admin.asign'); 
        }
    else echo"wrong username or password";
    


    //echo $un.$pass;

   /* $mysqli= new mysqli('localhost','root','','lar_sports') or die(mysqli_error($mysqli));
session_start();
$res=$mysqli->query("SELECT * FROM admins WHERE  username='$un' AND password='$pass'") or die($mysqli->error());


if((mysqli_num_rows($res))>=1)
    {   echo "signed in successfully";
        header('location:asign.php');
     }
    else 
    {   
        //sleep(5);
        echo "not signed in";
        sleep(5);
        header('location:admin.php');
    }*/
    }
}
