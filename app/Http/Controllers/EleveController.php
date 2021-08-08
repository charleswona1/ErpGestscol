<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\apprenant;
use App\Models\etablissement;
use Illuminate\Support\Facades\DB;

class EleveController extends Controller
{
    public function addEleve() {
    	return view('gestscol.gestscol-FormEleve');
    }

    public function ajoutEleve(Request $request) {
    	/*$request->validate([
    		 'nom'=>'required',
    		 'email'=>'required|email',
    		 'religion'=>'required',
    	]);*/

		$apprenant=DB::table('apprenant')->insertGetId([
            "date_naissance" => $request->dateNaissance,
			"lieu_naissance" => $request->lieuNaissance,
			"sexe" => $request->sexe,
			"domicile" => $request->domicile,
			"email" => $request->email,
			"nom_pere" => $request->nom_pere,
			"profession_pere" => $request->profession_pere,
			"tel_pere" => $request->tel_pere,
			"nom_mere" => $request->nom_mere,
			"profession_mere" => $request->profession_mere,
			"tel_mere" => $request->tel_mere,
			"nom_tuteur" => $request->nom_tuteur,
			"profession_tuteur" => $request->profession_tuteur,
			"tel_tuteur" => $request->tel_tuteur,
			"groupe_sanguin" => $request->groupe_sanguin,
			"religion" => $request->religion,
			"telephone" => $request->contact,
			"index_contact" => $request->index_contact,
			"type_contact" => $request->type_contact,
			"rhesus" => $request->rhesus,
			"nom" => $request->nom,
			"id_etablissement" => 1,
			"matricule" => new \Datetime(),
            ]);

		if($apprenant>0){
			return "Apprenant enregistré avec succès";
		}else {
			return "Erreur d'enregistrement de l'apprenant";
		}
    }
}
