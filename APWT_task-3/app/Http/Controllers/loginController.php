<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class loginController extends Controller
{
    public function login(){
       return view('login.login');
    }


   public function loginSubmit(Request $request){
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
        //return view('admin.homeAdmin');
    }
    elseif($user && $user->type == "user"){
        $request->session()->put('user', $user->id);
        return view('user.homeUser');
    }
    else{
        return "User name and Password do not match";
    }
}

   public function logOut(){
    session()->forget('user');
    return view('login.login');
 }
}
