<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\annee_academique;

class AnneeAcademiqueController extends Controller
{
	session_start();


		public function ajoutAnneeScolaire(Request $request) {

	    	if ($request->session()->get("user_id") == "") {
	    		
	    		$request->validate([
		    		 'nom'=>'required',
		    		 'date_debut'=>'required',
		    		 'date_fin'=>'required',
		    	]);

				$annee_academique = new annee_academique;

				

		        $succesBD = -1; 
		        $message = "";

		    	try {

		    		$id_annee = DB::table('annee_academique')->insertGetId([
		                "id_etablissement" = $_SESSION["id_etablissement"],
						"nom" = $request->nom,
						"date_debut" = $request->date_debut,
						"date_fin" = $request->date_fin,
						"est_verrouiller" = false,
						"cloturer" = false,
						"par_defaut" = true,
		            ]);

		            $_SESSION["id_annee_academique"] = $id_annee;

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

    	public function modifAnneeScolaire(Request $request)
	    {
	    	$succesBD = -1; 
		    $message = "";
	    	if ($request->session()->get("user_id") == "") {
	    		try {
	    			$affectedRows2 = DB::table('annee_academique')->where('id_annee_academique', $request->id)->update([$request->nom_colonne=>$request->valeur]);
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

	    public function supprimerAnneeScolaire(Request $request) {

	    	$succesBD = -1; 
		    $message = "";
	    	if ($request->session()->get("user_id") == "") {
	    		try {
	    			$res = annee_academique::where('id_annee_academique', $request->id)->delete();
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
 
}
