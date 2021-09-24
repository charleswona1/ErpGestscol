<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\niveau;

class NiveauController extends Controller
{
    public function liste_niveau() {
        return view('gestscol.ressource.niveau.liste_niveau');
    }

    public function formulaire_niveau() {
        return view('gestscol.ressource.niveau.formulaire_niveau');
    }
    /*session_start();


		public function ajoutNiveau(Request $request) {

	    	if ($request->session()->get("user_id") == "") {

	    		$request->validate([
		    		 'nom'=>'required',
		    		 'bareme'=>'required',
		    		 'ordre'=>'required',
		    	]);


		        $succesBD = -1;
		        $message = "";

		    	try {

		    		$id_periode = DB::table('niveau')->insertGetId([
		                "id_cycle" = $request->id_cycle,
		                "nom" = $request->nom,
		                "bareme" = $request->bareme,
		                "ordre" = $request->ordre,
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

    	public function modifNiveau(Request $request)
	    {
	    	$succesBD = -1;
		    $message = "";
	    	if ($request->session()->get("user_id") == "") {
	    		try {
	    			$affectedRows2 = DB::table('niveau')->where('id_niveau', $request->id)->update([$request->nom_colonne=>$request->valeur]);
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
	    			$res = niveau::where('id_niveau', $request->id)->delete();
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
