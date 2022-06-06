<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Formulaire extends Controller{

    public function show(Request $request){
        $FICHEId = null;
        if(isset($request->Fiche_Fin_Utilisation)) {
            $Fiche_Fin_Utilisation = \App\Models\fiche_fin::where('FICHEId', $request->Fiche_Fin_Utilisation)->get();
        } else {
            $Fiche_Fin_Utilisation = \App\Models\fiche_fin::all();
        }
        return view("formulaire",["formulaire"=>$Fiche_Fin_Utilisation]);
    }
    
    public function search() {
        $q = request()->input('q');
        $formulaires = \App\Models\fiche_fin::Where('FICHEVehId','like',"%$q%")
        ->orWhere('FICHEId','like',"%$q%")
        ->orWhere('FICHENbKm','like',"%$q%")
        ->orWhere('FICHEDureeUtil','like',"%$q%")->get();


        return view('searchformulaire')->with('formulaire', $formulaires);
    }
}