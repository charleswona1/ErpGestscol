<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\apprenant;
use App\Models\apprenant_classe;
use App\Models\classe;
use App\Models\classe_apprenant;
use App\Models\etablissement;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Session;

class EleveController extends Controller
{
    public function creer_apprenant() {
    	return view('gestscol.ressource.apprenant.creer_apprenant');
    }

    public function liste_apprenant(){
        $apprenants = apprenant::simplePaginate(3);
        return view('gestscol.ressource.apprenant.liste_apprenant', compact('apprenants'));
    }

    public function classe_apprenant() {
        $apprenantsSansClasse = apprenant::leftJoin('apprenant_classe','apprenant.id_apprenant','=','apprenant_classe.id_apprenant')
                                    ->select('apprenant.*','apprenant_classe.id_apprenant_classe')
                                    ->where('apprenant.id_etablissement', 1)
                                    ->get()
                                    ->reject(function ($apprenant) {
                                        return $apprenant->id_apprenant_classe != null;
                                    });
        $listClasses = classe::all();
        
        return view('gestscol.configuration.eleve_classe',compact('apprenantsSansClasse','listClasses'));
    }

    public function apprenantClasse(Request $request){
        $apprenants = apprenant_classe::where([['id_etablissement',1],['id_classe_annee',$request->key]])->get();
        return response()->json($apprenants);
    }

    public function ajouter_apprenant(Request $request) {
    	$request->validate([
    		 'nom'=>['required', 'string', 'max:255'],
             'sexe'=>['required'],
             'dateNaissance'=>['required', 'date'],
             'lieuNaissance'=>['required'],
             'domicile'=>['required'],
    	]);

        try {
            $apprenant=DB::table('apprenant')->insertGetId([
                "date_naissance" => $request->dateNaissance,
                "lieu_naissance" => $request->lieuNaissance,
                "sexe" => $request->sexe,
                "domicile" => $request->domicile,
                "email" => $request->email,
                "nom_pere" => $request->nom_pere,
                "profession_pere" => $request->profession_pere,
                "tel_pere" => $request->tel_pere,
                "nom_mere" => $request->nom_mere,
                "profession_mere" => $request->profession_mere,
                "tel_mere" => $request->tel_mere,
                "nom_tuteur" => $request->nom_tuteur,
                "profession_tuteur" => $request->profession_tuteur,
                "tel_tuteur" => $request->tel_tuteur,
                "groupe_sanguin" => $request->groupe_sanguin,
                "religion" => $request->religion,
                "telephone" => $request->contact,
                "index_contact" => $request->autre,
                "type_contact" => $request->type_contact,
                "nom" => $request->nom,
                "id_etablissement" => 1,
                ]);
            return 1;
        } catch (Exception $th) {
            return $th->getMessage();
        }
    }

    public function affectation(Request $request){
        
        foreach ($request->dataAffectation as $data) {
            
            $apprenant = apprenant::where('id_apprenant',$data)->first();
            $apprenant_classe = new apprenant_classe();
            $apprenant_classe->id_classe_annee = $request->id_classe;
            $apprenant_classe->id_etablissement = 1;
            $apprenant_classe->nom = $apprenant->nom;
            $apprenant_classe->id_apprenant = $apprenant->id_apprenant;
            $apprenant_classe->numero = $apprenant->telephone;
            $apprenant_classe->save();
        }
        Session::flash('success', "affectation reussi");
        return redirect()->route('gestscol.classe_apprenant');

    }
}
