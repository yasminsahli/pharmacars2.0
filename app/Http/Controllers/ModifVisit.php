<?php

namespace App\Http\Controllers;
use App\Models\visiteur;

use Illuminate\Http\Request;

class ModifVisit extends Controller{
    public function show($id){
        $visiteur=visiteur::findOrFail($id);

        return view('modifvisiteur', compact("visiteur"));
    }
}