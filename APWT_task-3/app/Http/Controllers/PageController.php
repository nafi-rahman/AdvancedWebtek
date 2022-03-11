<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }
    public function product(){
        $bikes = array(" Yamaha YZF R15 V3","TVS Apache RTR","Royal Enfield Classic"," Yamaha MT-15","Hero Splendor Plus");
        return view('product')->with('bikes',$bikes);
    }
    public function ourTeam(){
        return view('ourTeam');
    }
    public function aboutUs(){
        return view('aboutUs');
    }
    public function contactUs(){
        return view('contactUs');
    }

}
