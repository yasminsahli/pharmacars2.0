<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Visiteur extends Controller{

    public function show(Request $request){
        $VISITId = null;
        if(isset($request->Visiteur)) {
            $Visiteur = \App\Models\visiteur::where('VISITId', $request->Visiteur)->get();
        } else {
            $Visiteur = \App\Models\visiteur::all();
        }
        return view("visiteur",["visiteur"=>$Visiteur]);
    }

    public function create(Request $request) {

        $rqs = DB::table('visiteur')->insert([

            'VISITId' => $request->input('VISITId'),
            'VISITNom' => $request->input('VISITNom'),
            'VISITPrenom' => $request->input('VISITPrenom'),
            'VISITAge' => $request->input('VISITAge'),
            'VISITPoste' => $request->input('VISITPoste'),
        ]);


        return redirect('/visiteur');
    }

    public function upd($id) {

        $visiteurs = \App\Models\visiteur::findorfail($id);

        return view("Update/updateSecteurs", compact('visiteur'));

    }

    public function modif(Request $request, visiteur $Visiteur) {

        $rqs = DB::table('visiteur')->where('VISITId','=', $Visiteur->VISITId)
        ->update([


            'VISITNom' => $request->input('VISITNom'),
        ]);


        return redirect('/visiteur');
    }

    public function del(Request $request, visiteur $Visiteur) {

        $Visiteur->delete();

        return back();

    }

    public function search() {
        $q = request()->input('q');
        $visiteurs = \App\Models\Visiteur::Where('VISITId','like',"%$q%")
        ->orWhere('VISITNom','like',"%$q%")
        ->orWhere('VISITPrenom','like',"%$q%")
        ->orWhere('VISITAge','like',"%$q%")
        ->orWhere('VISITPoste','like',"%$q%")->get();

        return view('searchVisiteur')->with('visiteur', $visiteurs);
    }

}