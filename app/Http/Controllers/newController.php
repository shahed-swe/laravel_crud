<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newController extends Controller
{
    public function home(){
        return view('front.home',['title' => 'Home']);
    }
    public function about(){
        return view('front.about',['title' => 'About']);
    }
    public function contact(){
        return view('front.contact',['title' => 'Contact']);
    }
}
