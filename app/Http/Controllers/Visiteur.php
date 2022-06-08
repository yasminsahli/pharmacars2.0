<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



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

    public function modif(Request $request, int $Visiteur) {
        $rqs = DB::table('visiteur')->where('VISITId', $Visiteur)
        ->update([
            'VISITNom' => $request->input('VISITNom'),
            'VISITPrenom' => $request->input('VISITPrenom'),
            'VISITAge' => $request->input('VISITAge'),
            'VISITPoste' => $request->input('VISITPoste'),
        ]);


        return redirect('/visiteur');
    }

    public function del(Request $request, int $visiteur) {

        DB::table('permis')->where('PermisVisitId', $visiteur)->delete();

        DB::table('fiche_visiteur')->where('FicheVVisitId', $visiteur)->delete();

        DB::table('connexion')->where('CONNEXVisitId', $visiteur)->delete();

        DB::table('utilisateur')->where('UTILVisitId', $visiteur)->delete();

        DB::table('visiteur')->where('VISITId', $visiteur)->delete();

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