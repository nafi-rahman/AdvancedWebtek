<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class adminController extends Controller
{
    public function home(){
        return view('admin.homeAdmin');
    }
    public function product(){
        $bikes = array(" Yamaha YZF R15 V3","TVS Apache RTR","Royal Enfield Classic"," Yamaha MT-15","Hero Splendor Plus");
        return view('product')->with('bikes',$bikes);
    }
    public function ourTeam(){
        return view('ourTeam');
    }

    public function contactUs(){
        return view('contactUs');
    }

    public function userList(){
        $users = users::where('accType', 'user')->get();
        return view('admin.list')->with('users', $users);
    }


    public function addUser(){
        return view('admin.addUser');
    }

    public function addUserSubmit(Request $request){



        $user = new users();
        $user->name = $request->name;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->accType = "user";

        $user->save();
        return $this->userList();
    }

     public function editUser(Request $request){
        $user = Users::where('id', $request->id)->first();
        return view('admin.editUser')->with('user', $user);
    }
    public function editUserSubmit(Request $request){
        $user = users::where('id', $request->id)->first();

        $user->name = $request->name;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->accType = "user";
        $user->save();

        return redirect()->route('userList');
    }

    public function deleteUser(Request $request){
        $user = users::where('id', $request->id)->first();
        return view('admin.deleteUser')->with('user', $user);
    }

    public function deleteUserSubmit(Request $request){
        $user = users::where('id', $request->id)->first();
        $user->delete();
        return redirect()->route('userList');
    }


}
