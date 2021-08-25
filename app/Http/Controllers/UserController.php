<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $pass= $request['password'];
        $cpass= $request['confirm'];

        if($pass==$cpass)
        {
        $user = new User();
        $user->fname=$request['firstname'];
        $user->lname=$request['lastname'];
        $user->email=$request['email'];
        $user->pword=$request['password'];
        $user->mob_no=$request['telephone'];
        $user->Address=$request['address'];
        $user->City=$request['zone_id'];
        $user->Country=$request['country_id'];
        $user->newsletter=$request['newsletter'];
        $user->agreement=$request['agree'];
        $user->save();

        return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function showall()
    {
        $users=User::all();
        return view('users',compact('users'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /*public function register(Request $request)
    {
        $user = new User();
        $user->fname=$request['firstname'];
        $user->lname=$request['lastname'];
        $user->email=$request['email'];
        $user->pword=$request['password'];
        $user->mob_no=$request['telephone'];
        $user->Address=$request['address'];
        $user->City=$request['zone_id'];
        $user->Country=$request['country_id'];
        $user->newsletter=$request['newsletter'];
        $user->agreement=$request['agree'];


    }*/

    public function logout()
    {
        //session('uid')=false;
        session(['uid' => false]);
        //dd(session('uid'));
        return redirect('/');
    }

    public function check(Request $request)
    {
        $email=$request['semail'];
        $pass=$request['spass'];

        $em2= User::where('email',$email)->first();
        $p2= User::where('pword',$pass)->first();

        if($em2 && $p2)
        {
            //sleep(5);
            echo "welcome";
            //sleep(8);
            
            
            $var=User::where('pword',$pass)->get(['id'])->toArray();
            //session('uid')=User::where('password',$pass)->get(['id']);
            //dd($var);
            session(['uid' => $var]);

            //dd( session('uid')[0]['id']);
            //dd(session['uid']);
            //dd($_SESSION['userid']);
            //{{$_SESSION['userid']}}
           return redirect('/'); 
           //dd( session('uid'));
            //return redirect('/');
            //return redirect('/',compact($_SESSION['userid']));
           // return view('admin.asign');
        }
    else echo"wrong username or password";
    }
}
