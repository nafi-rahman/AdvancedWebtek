<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageControl extends Controller
{
    public function home (){
        return view('home');
    }

    public function about (){
        return view('about');
    }

    public function contact (){
        return view('contact');
    }

    public function serviece (){
        return view('service');
    }

    public function team (){
        return view('team');
    }
}
