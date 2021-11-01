<?php

namespace App\Http\Controllers;
use App\Models\etablissement;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\Models\sous_periode;
use App\Models\periode;

class SousPeriodeController extends Controller
{
    public function liste_sous_periode() {
		$sous_periodes=sous_periode::all();
	//	dd($sous_periodes[0]->periode()->get()[0]);
		$nom_periode= etablissement::where('id_etablissement', 1)->get()[0]->nom_periode;
        
        return view('gestscol.ressource.sous-periode.liste_sous_periode',compact('sous_periodes', 'nom_periode'));
    }
    public function formulaire_sous_periode() {
		$periodes=periode::all();
		//dd($periodes[0]->nom_periode());
        return view('gestscol.ressource.sous-periode.creer_sous_periode', compact('periodes'));
    }
	public function create(Request $request) {
		//dd($request->all());
		
		$request->validate([
			'id_sous_periode'=>'required',
			'numero'=>'required',
			'date_fin'=>'required',
			'pourcentage'=>'required',
	   ]);
		$sous_periode= new sous_periode($request->all());
		
		$sous_periode->save();
		Session::flash('success', "sous periode ajoutée avec success");
        return redirect()->route('gestscol.list_sous_periode');
    }
	public function edit($id) {
		$periodes=periode::all();
        
        $sous_periode=sous_periode::where('id_sous_periode',$id)->get()[0];
	//	dd($sous_periode);
        
        return view('gestscol.ressource.sous-periode.edit_sous_periode', compact('sous_periode', 'periodes'));
    }
	function update(Request $request)
	{
		$request->validate([
			'id_sous_periode'=>'required',
			'numero'=>'required',
			'date_fin'=>'required',
			'pourcentage'=>'required',
	   ]);
    // dd($request->id);
	sous_periode::where('id_sous_periode',$request->id)->update(
            array(
				'id_sous_periode'=>$request->id_sous_periode,
				'numero'=>$request->numero,
				'date_debut'=>$request->date_debut,
				'date_fin'=>$request->date_fin,
                           
            )
        );
        
        Session::flash('success', "sous periode modifiée avec success");
        return redirect()->route('gestscol.list_sous_periode');
	}
    public function destroy($id)
    {
       sous_periode::where('id_sous_periode', $id)->delete();
        Session::flash('success', "sous periode supprimé");
        
        return redirect()->route('gestscol.list_sous_periode');
     
    }
    /*
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
        */
}
