<?php

namespace App\Http\Controllers;

use App\Models\etablissement;
use Illuminate\Http\Request;
use App\Models\periode;
use Illuminate\Support\Facades\Session;

class PeriodeController extends Controller
{

    public function liste_periode() {
		$periodes=periode::all();
		$nom_periode= etablissement::where('id_etablissement', 1)->get()[0]->nom_periode;
        return view('gestscol.ressource.periode.liste_periode', compact('periodes', 'nom_periode'));
    }

    public function formulaire_periode() {
        return view('gestscol.ressource.periode.creer_periode');
    }
	public function create(Request $request) {
		$request->validate([
			'date_debut'=>'required',
			'numero'=>'required',
			'date_fin'=>'required',
			'pourcentage'=>'required',
	   ]);
	  // dd($request->all());
		$periode= new periode($request->all());
		
		$periode->save();
		Session::flash('success', "periode ajoutée avec success");
        return redirect()->route('gestscol.list_periode');
    }
	function edit($id) {
        $periode=periode::where('id_periode',$id)->get()[0];
        
        return view('gestscol.ressource.periode.edit_periode', compact('periode'));
    }
	function update(Request $request)
	{
		$request->validate([
			'date_debut'=>'required',
			'date_fin'=>'required',
			'pourcentage'=>'required',
	   ]);
    // dd($request->id);
	periode::where('id_periode',$request->id)->update(
            array(
				'date_debut'=>$request->date_debut,
				'date_fin'=>$request->date_fin,
				'pourcentage'=>$request->pourcentage,
                           
            )
        );
        
        Session::flash('success', "periode modifiée avec success");
        return redirect()->route('gestscol.list_periode');
	}
	public function destroy($id)
    {
        periode::where('id_periode', $id)->delete();
        Session::flash('success', "periode supprimé");
        
        return redirect()->route('gestscol.list_periode');
     
    }
	/*session_start();


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

	    }*/


}
