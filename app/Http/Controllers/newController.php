<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newController extends Controller
{
    public function hello(){
        // return view('about');
        echo "New Home Page";
    }
    public function hello2(){
        // return view('about');
        return view('home.back');
    }
}
