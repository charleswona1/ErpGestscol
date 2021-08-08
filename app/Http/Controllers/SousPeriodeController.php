<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sous_periode;

class SousPeriodeController extends Controller
{
    session_start();


		public function ajoutSousPeriode(Request $request) {

	    	if ($request->session()->get("user_id") == "") {
	    		
	    		$request->validate([
		    		 'numero'=>'required|numeric',
		    		 'date_debut'=>'required',
		    		 'date_fin'=>'required',
		    	]);
				

		        $succesBD = -1; 
		        $message = "";

		    	try {

		    		$id_periode = DB::table('sous_periode')->insertGetId([
		                "id_periode" = $request->periode,
		                "numero" = $request->numero,
		                "date_debut" = $request->date_debut,
		                "date_fin" = $request->date_fin,
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

    	public function modifSousPeriode(Request $request)
	    {
	    	$succesBD = -1; 
		    $message = "";
	    	if ($request->session()->get("user_id") == "") {
	    		try {
	    			$affectedRows2 = DB::table('sous_periode')->where('id_sous_periode', $request->id)->update([$request->nom_colonne=>$request->valeur]);
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

	    public function supprimerSousPeriode(Request $request) {

	    	$succesBD = -1; 
		    $message = "";
	    	if ($request->session()->get("user_id") == "") {
	    		try {
	    			$res = sous_periode::where('id_sous_periode', $request->id)->delete();
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
