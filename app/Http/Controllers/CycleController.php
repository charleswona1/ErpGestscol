<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cycle;

class CycleController extends Controller
{

    function liste_cycle() {
        return view('gestscol.ressource.cycle.list_cycle');
    }

    function formulaire_cycle() {
        return view('gestscol.ressource.cycle.formulaire_cycle');
    }
	//session_start();


		/*public function ajoutCycle(Request $request) {

	    	if ($request->session()->get("user_id") == "") {

	    		$request->validate([
		    		 'nom'=>'required',
		    	]);

				$annee_academique = new annee_academique;



		        $succesBD = -1;
		        $message = "";

		    	try {

		    		$id_annee = DB::table('cycle')->insertGetId([
		                "id_etablissement" = $_SESSION["id_etablissement"],
						"nom" = $request->nom,
		            ]);

		        	$succesBD = 1;
		        	$message = "succes de la requete";

		    	} catch (Exception $e) {
		    		$succesBD = 0;
		        	$message = $e->getMessage();
		    	}

		    	$resultat = array(
		    		'status' = $succesBD,
		    		'message' = $message,
		    	);

		        return response()->json($resultat);

	    	} else {

	    		$resultat = array(
		    		'status' = $succesBD,
		    		'message' = $message,
		    	);

	    		return response()->json($resultat);
	    	}
    	}

    	public function modifCycle(Request $request)
	    {
	    	$succesBD = -1;
		    $message = "";
	    	if ($request->session()->get("user_id") == "") {
	    		try {
	    			$affectedRows2 = DB::table('cycle')->where('id_cycle', $request->id)->update([$request->nom_colonne=>$request->valeur]);
	    			$succesBD = 1;
		        	$message = "succes de la requete";
	    		} catch (Exception $e) {
	    			$succesBD = 0;
		        	$message = $e->getMessage();
	    		}

	    		$resultat = array(
		    		'status' = $succesBD,
		    		'message' = $message,
		    	);

	    		return response()->json($resultat);
	    	} else {

	    		$resultat = array(
		    		'status' = $succesBD,
		    		'message' = $message,
		    	);

	    		return response()->json($resultat);
	    	}
	    }

	    /*public function supprimerCycle(Request $request) {

	    	$succesBD = -1;
		    $message = "";
	    	if ($request->session()->get("user_id") == "") {
	    		try {
	    			$res = cycle::where('id_cycle', $request->id)->delete();
	    			$succesBD = 1;
		        	$message = "succes de la requete";
	    		} catch (Exception $e) {
	    			$succesBD = 0;
		        	$message = $e->getMessage();
	    		}

	    		$resultat = array(
		    		'status' = $succesBD,
		    		'message' = $message,
		    	);

	    		return response()->json($resultat);
	    	} else {

	    		$resultat = array(
		    		'status' = $succesBD,
		    		'message' = $message,
		    	);

	    		return response()->json($resultat);
	    	}

	    }*/


}
