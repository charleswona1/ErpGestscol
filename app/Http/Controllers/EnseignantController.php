<?php

namespace App\Http\Controllers;

use App\Models\enseignant;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EnseignantController extends Controller
{
    public function addEnseignant() {
    	return view('gestscol.gestscol-Formprof');
    }

    public function liste_enseignant() {
        $enseignants = enseignant::paginate(5);
    
        return view('gestscol.ressource.enseignant.list_enseignant',compact("enseignants"));
    }

    public function creer_enseignant() {
        return view('gestscol.ressource.enseignant.creer_enseignant');
    }

    public function ajouter_enseignant(Request $request) {

        $request->validate([
            'nom'=>['required', 'string', 'max:255'],
            'sexe'=>['required'],
            'titre'=>['required'],
            'cni'=>['required'],
            'sexe'=>['required'],
            'status'=>['required'],
            'niveau'=>['required'],
            'contact'=>['required'],
            'localisation'=>['required'],
            'contact' => ['required', 'max:30'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'regex:/(.+)@(.+)\.(.+)/i',
            ],
       ]);

       $path1 = base_path() . '/public/images/';

       $presence1 = $request->pImage;
       $binary = null;

       $photo = $request->file('image');
       if ($presence1 != 1) {
            //$photo = $request->file('image');
            //$binary = base64_encode(file_get_contents($photo));
            $nomI = date('YmdHis').'.'.$photo->getClientOriginalExtension();
            $path1 = base_path() . '/public/images/';
            $photo->move($path1, $nomI);
       } else {
            $nomI = $photo;
            //$binary = base64_encode(file_get_contents($photo));
       }


       try {
           $ens = new enseignant();
           $ens->id_etablissement = 1;
           $ens->nom = $request->nom;
           $ens->titre = $request->titre;
           $ens->matricule = $request->matricule;
           $ens->photo = $binary;
           $ens->date_naissance = $request->dateNaissance;
           $ens->lieu_naissance = $request->lieuNaissance;
           $ens->sexe = $request->sexe;
           $ens->num_autorisation = $request->num_autorisation;
           $ens->num_cnps = $request->cnps;
           $ens->num_cni = $request->cni;
           $ens->religion = $request->religion;
           $ens->status = $request->status;
           $ens->diplome = $request->niveau;
           $ens->telephone = $request->contact;
           $ens->email = $request->email;
           $ens->localisation = $request->localisation;
           $ens->groupe_sanguin = $request->groupe_sanguin;

           $ens->save();
           return 1;
       } catch (Exception $th) {
           return $th->getMessage();
       }

    }

    public function delete(Request $request){
        
        $val = enseignant::where('id_enseignant',$request->enseignant)->first();

        $val->delete();

        Session::flash('success', "Enseignant supprimé");
         
         return redirect()->back();
    }
}
