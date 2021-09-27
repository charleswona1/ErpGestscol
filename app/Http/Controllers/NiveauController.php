<?php

namespace App\Http\Controllers;

use App\Models\etablissement;
use Illuminate\Http\Request;
use App\Models\niveau;
use App\Models\niveau_scolaire;
use Exception;

class NiveauController extends Controller
{
    public function liste_niveau() {
        $etab = etablissement::find(1);
        $cycles = $etab->cycle()->get();
        $resultatFinal = array();
        foreach ($cycles as $cycle) {
            $niveaux = $cycle->niveauScolaire()->get();
            foreach ($niveaux as $niveau) {
                $tabNiv = array();
                $tabNiv["id"] = $niveau->id_niveau;
                $tabNiv["cycle"] = $cycle->nom;
                $tabNiv["niveau"] = $niveau->nom;
                $tabNiv["bareme"] = $niveau->bareme;
                $tabNiv["ordre"] = $niveau->ordre;

                $resultatFinal[] = $tabNiv;
            }
        }
        return view('gestscol.ressource.niveau.liste_niveau', compact("resultatFinal"));
    }

    public function formulaire_niveau() {
        $etab = etablissement::find(1);
        $cycles = $etab->cycle()->get();
        return view('gestscol.ressource.niveau.formulaire_niveau', compact('cycles'));
    }

    public function creer_niveau(Request $request) {

        $request->validate([
            'nom'=>['required', 'string', 'max:50'],
            'cycle'=>['required', 'numeric'],
            'bareme'=>['required', 'numeric'],
            'ordre'=>['required', 'numeric'],

        ]);

        try {
            $niv = new niveau_scolaire();
            $niv->id_cycle = (int)$request->cycle;
            $niv->nom = $request->nom;
            $niv->bareme = (int)$request->bareme;
            $niv->ordre = (int)$request->ordre;

            $niv->save();
            return 1;
        } catch (Exception $th) {
            return $th->getMessage();
        }

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
