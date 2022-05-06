<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupprFormu extends Controller{
    public function show(){
        return view('deleteformulaire');
    }
}