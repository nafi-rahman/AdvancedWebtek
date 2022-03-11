<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userControl extends Controller
{
    public function login(){
        return view('users.login');
     }

     public function loginSub(Request $request){
         $validate = $request->validate(
             [
                'userName' => 'required',
                'password' => 'required'
             ],

     );

         $userName = $request->input('userName');
         $password = $request->input('password');

         if($userName === "Nafi" && $password === "123"){
            return view('home');
         }
         else{
            return "either user name or password is wrong";
         }

    }

    public function register(){
        return view('users.register');
    }

    public function registerSub(Request $request){
        $validate = $request->validate([
               'name' => 'required',
               'dob' => 'required',
               'phone' => 'required',
               'email' => 'email'
        ]

    );

           return view('users.login');
        }

    public function logOut(){
     return view('users.login');
  }
}
