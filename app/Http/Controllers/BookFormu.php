<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookFormu extends Controller{
    public function show(){
        return view('booking');
    }
}