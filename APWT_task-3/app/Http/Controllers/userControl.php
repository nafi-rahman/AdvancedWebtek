<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class userControl extends Controller
{
    public function login(){
        return view('users.login');
     }


    public function loginSub(Request $request){
     $validate = $request->validate([
         'userName' => 'required',
         'password' => 'required'
     ]);

     $userName = $request->input('userName');
     $password = $request->input('password');

     $user = users::where('name', $request->userName)
         ->where('password', $request->password)
         ->first();

     if($user && $user->type == "admin"){
         $request->session()->put('user', $user->id);
         return redirect()->route('adminHome');
     }
     elseif($user && $user->type == "user"){
         $request->session()->put('user', $user->id);
         return view('home');
     }
     else{
         return "User name and Password do not match";
     }
 }

    public function logOut(){
     session()->forget('user');
     return view('users.login');
  }
}
