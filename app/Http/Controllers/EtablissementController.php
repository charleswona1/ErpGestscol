<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\etablissement;

class EtablissementController extends Controller
{
    public function ajoutEtablissement(Request $request) {
    	session_start();

    	$succesBD = -1; 
	    $message = "";
    	if ($request->session()->get("user_id") == "") {

    		$request->validate([
		    		 'nom'=>'required|unique:user',
		    		 'abreviation'=>'required',
		    		 'type_etablissement'=>'required',
		    		 'type_apprenant'=>'required',
		    		 'ville'=>'required',
		    		 'boite_postale'=>'required',
		    		 'email'=>'required',
		    		 'telephone'=>'required',
		    		 'localisation'=>'required',
		    		 'logo'=>'required',
		    		 'nom_periode'=>'required',
		    		 'adj_masculin_periode'=>'required',
		    		 'adj_feminin_periode'=>'required',
		    		 'nom_sous_periode'=>'required',
		    		 'adj_masculin_sous_periode'=>'required',
		    		 'adj_feminin_sous_periode'=>'required',
		    		 'nom_annee'=>'required',
		    		 'adj_masculin_annee'=>'required',
		    		 'adj_feminin_annee'=>'required',
		    		 'resp1'=>'required',
		    		 'resp2'=>'required',
		    		 'resp3'=>'required',
		    	]);

    		try {

    			$id_etablissement = DB::table('etablissement')->insertGetId([
	                "nom" => $request->nom,
					"abreviation"=> $request->abreviation,
					"type_etablissement"=> $request->type_etablissement,
					"type_apprenant" => $request->type_apprenant,
					"ville" => $request->ville,
					"boite_postale" => $request->boite_postale,
					"email" =>$request->email,
					"telephone" => $request->telephone,
					"fax"=>$request->fax,
					"site_web" => $request->site_web,
					"localisation" => $request->localisation,
					"logo" => $request->logo,
					"creation_date" => date("Y-m-d"),
					"nom_periode" => $request->nom_periode,
					"adj_masculin_periode" => $request->adj_masculin_periode,
					"adj_feminin_periode"=> $request->adj_feminin_periode,
					"nom_sous_periode"=>$request->nom_sous_periode,
					"adj_masculin_sous_periode" => $request->adj_masculin_sous_periode,
					"adj_feminin_sous_periode"=> $request->adj_feminin_sous_periode,
					"nom_annee" => $request->nom_annee,
					"adj_masculin_annee" => $request->adj_masculin_annee,
					"adj_feminin_annee" => $request->adj_feminin_annee,
					"resp1" => $request->resp1,
					"resp2" => $request->resp2,
					"resp3" => $request->resp3,
	            ]);

				$_SESSION["id_etablissement"] = $id_etablissement;
				$succesBD = 1;
	        	$message = "succes de la requete";

    		} catch (Exception $e) {
    			$succesBD = 0;
	        	$message = $e->getMessage();
    		}

    		$resultat = array(
	    		'status' => $succesBD,
	    		'message' => $message,
	    	);
    		
    		return response()->json($resultat);
    	} else {

    		$resultat = array(
	    		'status' =>$succesBD,
	    		'message' => $message,
	    	);
    		
    		return response()->json($resultat);
    	}

    }


    public function modifEtablissement(Request $request)
    {
    	$succesBD = -1; 
	    $message = "";
    	if ($request->session()->get("user_id") == "") {
    		try {
    			$affectedRows2 = DB::table('etablissement')->where('id_etablissement', $request->id)->update([$request->nom_colonne=>$request->valeur]);
    			$succesBD = 1;
	        	$message = "succes de la requete";
    		} catch (Exception $e) {
    			$succesBD = 0;
	        	$message = $e->getMessage();
    		}

    		$resultat = array(
	    		'status' => $succesBD,
	    		'message' => $message,
	    	);
    		
    		return response()->json($resultat);
    	} else {

    		$resultat = array(
	    		'status' => $succesBD,
	    		'message' =>$message,
	    	);
    		
    		return response()->json($resultat);
    	}
    }

    public function supprimerEtablissement(Request $request) {

    	$succesBD = -1; 
	    $message = "";
    	if ($request->session()->get("user_id") == "") {
    		try {
    			$res = etablissement::where('id_etablissement', $request->id)->delete();
    			$succesBD = 1;
	        	$message = "succes de la requete";
    		} catch (Exception $e) {
    			$succesBD = 0;
	        	$message = $e->getMessage();
    		}

    		$resultat = array(
	    		'status' => $succesBD,
	    		'message' => $message,
	    	);
    		
    		return response()->json($resultat);
    	} else {

    		$resultat = array(
	    		'status' => $succesBD,
	    		'message' => $message,
	    	);
    		
    		return response()->json($resultat);
    	}

    }

}
