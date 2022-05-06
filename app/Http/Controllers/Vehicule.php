<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Vehicule extends Controller{

    public function show(Request $request){
        
        $Vehicule = \App\Models\Vehicule::orderBy('VEHId','asc')->paginate(10);
        return view("vehicule", compact('Vehicule'));
    }

    public function search() {
        $q = request()->input('q');
        $vehicules = \App\Models\Vehicule::Where('VEHId','like',"%$q%")
        ->orWhere('VEHModele','like',"%$q%")
        ->orWhere('VEHDateRevision','like',"%$q%")->get();

        return view('searchvehicule')->with('vehicule', $vehicules);
    }
}