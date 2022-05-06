<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupprVisit extends Controller{
    public function show(){
        return view('deletevisiteur');
    }
}