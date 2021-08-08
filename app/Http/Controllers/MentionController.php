<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mention;

class MentionController extends Controller
{
    session_start();


		public function ajoutMention(Request $request) {

	    	if ($request->session()->get("user_id") == "") {
	    		
	    		$request->validate([
		    		 'note_min'=>'required|numeric',
		    		 'note_max'=>'required|numeric',
		    		 'libelle'=>'required|max:100',
		    	]);
				

		        $succesBD = -1; 
		        $message = "";

		    	try {

		    		$id_periode = DB::table('mention')->insertGetId([
		                "id_annee_academique" = $_SESSION["id_annee_academique"],,
		                "note_min" = $request->note_min,
		                "note_max" = $request->note_max,
		                "libelle" = $request->libelle,
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

    	public function modifMention(Request $request)
	    {
	    	$succesBD = -1; 
		    $message = "";
	    	if ($request->session()->get("user_id") == "") {
	    		try {
	    			$affectedRows2 = DB::table('mention')->where('id_mention', $request->id)->update([$request->nom_colonne=>$request->valeur]);
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

	    public function supprimerMention(Request $request) {

	    	$succesBD = -1; 
		    $message = "";
	    	if ($request->session()->get("user_id") == "") {
	    		try {
	    			$res = mention::where('id_mention', $request->id)->delete();
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
