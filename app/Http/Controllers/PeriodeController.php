<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\periode;

class PeriodeController extends Controller
{
    

	session_start();


		public function ajoutPeriode(Request $request) {

	    	if ($request->session()->get("user_id") == "") {
	    		
	    		$request->validate([
		    		 'numero'=>'required|numeric',
		    		 'date_debut'=>'required',
		    		 'date_fin'=>'required',
		    		 'pourcentage'=>'required',
		    	]);
				

		        $succesBD = -1; 
		        $message = "";

		    	try {

		    		$id_periode = DB::table('periode')->insertGetId([
		                "id_etablissement" = $_SESSION["id_etablissement"],
		                "numero" = $request->numero,
		                "date_debut" = $request->date_debut,
		                "date_fin" = $request->date_fin,
						"pourcentage" = $request->pourcentage,
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

    	public function modifPeriode(Request $request)
	    {
	    	$succesBD = -1; 
		    $message = "";
	    	if ($request->session()->get("user_id") == "") {
	    		try {
	    			$affectedRows2 = DB::table('periode')->where('id_periode', $request->id)->update([$request->nom_colonne=>$request->valeur]);
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

	    public function supprimerPeriode(Request $request) {

	    	$succesBD = -1; 
		    $message = "";
	    	if ($request->session()->get("user_id") == "") {
	    		try {
	    			$res = periode::where('id_periode', $request->id)->delete();
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
