<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller 
{
    public function show(){
        return view('auth/login');
    }
}