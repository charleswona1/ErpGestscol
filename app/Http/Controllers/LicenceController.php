<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\licence;

class LicenceController extends Controller
{
    public function getLicence() {
    	return view('licence.getLicence');
    }

    public function ajoutLicence(Request $request) {

    	if ($request->session()->get("user_id") == "") {
    		
    		$validated = $request->validate([
	            'numero' => ['required', 'string', 'max:255', Rule::unique(licence::class)],
	        ]);

	        $succesBD = -1; 
	        $message = "";

	    	try {

	    		licence::create([
		            'numero' => $request->numero,
		            'creation_date' => date("Y-m-d"),
		            'expiration_date' => date('Y-m-d',strtotime("+1 year")),
		            'status' => true,

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


    public function modifLicence(Request $request)
    {
    	$succesBD = -1; 
	    $message = "";
    	if ($request->session()->get("user_id") == "") {
    		try {
    			$affectedRows2 = DB::table('licence')->where('id_licence', $request->id)->update([$request->nom_colonne=>$request->valeur]);
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

    public function supprimerLicence(Request $request) {

    	$succesBD = -1; 
	    $message = "";
    	if ($request->session()->get("user_id") == "") {
    		try {
    			$res = licence::where('id_licence', $request->id)->delete();
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

    public function act_des_licence(Request $request) {

    	$succesBD = -1; 
	    $message = "";
    	if ($request->session()->get("user_id") == "") {
    		try {
    			if ($request->action == 1) {
	    			$affectedRows2 = DB::table('licence')->where('id_licence', $request->id)->update(["status"=>true]);
	    			$succesBD = 1;
		        	$message = "succes de la requete";
    			} else {
    				$affectedRows2 = DB::table('licence')->where('id_licence', $request->id)->update(["status"=>false]);
	    			$succesBD = 1;
		        	$message = "succes de la requete";
    			}
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
