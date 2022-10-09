<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function login(){
       
        return view('Admin.login');
    }

    public function makelogin(Request $request){
       
        $data = array(
             'email'=> $request->email,
            'password'=>$request->password,
            'role'=>'admin'       
         );

         if(Auth::attempt($data)){
        return redirect()->route('admin.dashboard');
         }

         else{
            return back()->withErrors(['message'=>'Invalid user or password']);
         }
    }


    public function dashboard(){
        return view('admin.dashboard');  
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
