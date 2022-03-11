<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class registrationController extends Controller
{
    public function registration(){
        return view('login.registration');
    }

    public function registrationSubmit(Request $request){



        $user = new users();
        $user->name = $request->name;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->accType = "user";

        $user->save();
        return view('login.login');
    }


}
