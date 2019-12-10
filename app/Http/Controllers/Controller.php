<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\data;
use DB;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
	public function showLogin()
    {
        return view('login');
    }

    public function showRegister()
    {
        return view('register');
    }

    public function showTictactoe()
    {
        return view('tictactoe');
    }

    public static function postRegister(Request $request)
    {
    	$name=$request->input('name');
    	$phno=$request->input('phone_number');
    	$email_id=$request->input('email_id');

    	

    	if (DB::table('data')->where('email_id', $email_id)->exists())
    	{
    		$request->session()->flash('error','The email id '.$email_id.' is already registered. ');
    		return redirect()->route('register');
    	}
    	else
    	{
    		$a=new data;
	    	$a->name=$name;
	    	$a->phone_number=$phno;
	    	$a->email_id=$email_id;
	    	$a->save();	
	    	$request->session()->flash('error','You are successfully Registered');
	    	return redirect()->route('login');

    	}
    }

    public static function checklogin(Request $request)
    {
        $email=$request->input('email_id');
        $phone_number=$request->input('phone_number'); 
        if(DB::table('data')->select('email_id','phone_number')->where('email_id',$email)->exists())
        {
            $user = DB::table('data')->select('email_id','phone_number')->where('email_id',$email)->get();
            if($user[0]->email_id== $email && $user[0]->phone_number == $phone_number )
            {
                //return $user;
                return redirect()->route('tictactoe');
            }
            else
            {
                $request->session()->flash('error','Incorrect password');
                return redirect()->route('login');
            }
        }
        else{

            $request->session()->flash('error','You have not registered, please register here');
            return redirect()->route('register');
        }

    }

    public static function logout(Request $request)
    {
        $request->session()->pull('email');
        return redirect()->route('login');
    }

}
