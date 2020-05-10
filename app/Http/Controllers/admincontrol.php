<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontrol extends Controller
{
    public function show(){
        return view('back.show',['title' => "Show Data"]);
    }
}
