<?php

namespace App\Http\Controllers;

use App\Models\annee_academique;
use App\Models\etablissement;
use App\Models\module;
use App\Models\profil;
use App\Models\ressource;
use App\Models\ressource_profil;
use DateTime;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AnneeScolaireController extends Controller
{
    public function annee_scolaire(){
        $annee_scolaire = etablissement::find(Session::get('idEtabl'))->annee_academique()->get();
        return view('configuration.content.annee.annee', compact("annee_scolaire"));
    }

    public function delete_annee_scolaire(Request $request){

        $succesBD = -1;
        $message = "";
        $ligneT = -1;

        try {
            $res = annee_academique::where('id_annee_academique', $request->id)->delete();
            $succesBD = 1;
            $ligneT = $request->id;
            $message = "succes de la requete";
        } catch (QueryException $e) {
            if($e->getCode() == '23000'){
                $succesBD = 2;
                $message = $e->getMessage();
            } else {
                $succesBD = 0;
                $message = $e->getMessage();
            }

        }

        $resultat = array(
            'status' => $succesBD,
            'message' => $message,
            'ligneT'  => $ligneT,
        );

        return response()->json($resultat);

    }

    public function ajout_annee(Request $request){
        $validated = $request->validate([
            'libelle' => ['required'],
            'date_debut' => ['required'],
            'date_fin' => ['required'],
        ]);

        $ymd1 = DateTime::createFromFormat('d/m/Y', $request->date_debut)->format('Y-m-d');
        $ymd2 = DateTime::createFromFormat('d/m/Y', $request->date_fin)->format('Y-m-d');

        $annee = new annee_academique();
        $annee->id_etablissement = Session::get('idEtabl');
        $annee->nom = $request->libelle;
        $annee->date_debut = $ymd1;
        $annee->date_fin = $ymd2;
        $annee->est_verrouiller = 0;
        $annee->est_cloturer = 0;
        $annee->par_defaut = 0;
        try {
            $annee->save();
            return $annee;
        } catch (QueryException $e) {
            return $e->getMessage();
        }

    }

    public function encour_annee(Request $request){

        $taille = $request->taille;
        $resultat = array();
        for($i=0; $i<$taille; $i++){
            $annee = annee_academique::find($request->input('annee'.$i));
            $annee->est_verrouiller = false;
            try {
                $annee->save();
            } catch (QueryException $e) {
                $resultat[] = $e->getMessage();
            }

        }

        return $resultat;

    }

    public function verrouiller_annee(Request $request){

        $taille = $request->taille;
        $resultat = array();
        for($i=0; $i<$taille; $i++){
            $annee = annee_academique::find($request->input('annee'.$i));
            $annee->est_verrouiller = true;
            try {
                $annee->save();
            } catch (QueryException $e) {
                $resultat[] = $e->getMessage();
            }

        }

        return $resultat;

    }

    public function getPeriode() {
        $denomination = etablissement::find(Session::get('idEtabl'));

        return view("configuration.content.etablissement.periode", compact('denomination'));
    }

    public function modifDenominationAnnee(){
        $denomination = etablissement::find(Session::get('idEtabl'));
        $niv = 1;
        return view("configuration.content.etablissement.editPeriode", compact('denomination', 'niv'));
    }

    public function modifDenominationPeriode(){
        $denomination = etablissement::find(Session::get('idEtabl'));
        $niv = 2;
        return view("configuration.content.etablissement.editPeriode", compact('denomination', 'niv'));
    }

    public function modifDenominationSousPeriode(){
        $denomination = etablissement::find(Session::get('idEtabl'));
        $niv = 3;
        return view("configuration.content.etablissement.editPeriode", compact('denomination', 'niv'));
    }

    public function save_denomination(Request $request){
        $denomination = etablissement::find(Session::get('idEtabl'));
        if($request->niv == 1){
            $denomination->nom_annee = $request->nom;
            $denomination->adj_masculin_annee = $request->nom_max;
            $denomination->adj_feminin_annee = $request->nom_fem;
            try {
                $denomination->save();
                return 1;
            } catch (QueryException $e) {
                return $e->getMessage();
            }
        }elseif ($request->niv == 2) {
            $denomination->nom_periode = $request->nom;
            $denomination->adj_masculin_periode = $request->nom_max;
            $denomination->adj_feminin_periode = $request->nom_fem;
            try {
                $denomination->save();
                return 1;
            } catch (QueryException $e) {
                return $e->getMessage();
            }
        }else{
            $denomination->nom_sous_periode = $request->nom;
            $denomination->adj_masculin_sous_periode = $request->nom_max;
            $denomination->adj_feminin_sous_periode = $request->nom_fem;
            try {
                $denomination->save();
                return 1;
            } catch (QueryException $e) {
                return $e->getMessage();
            }
        }
    }

    public function getRessourceGroupe(){
        $profils = profil::where('id_etablissement', Session::get('idEtabl'))->get();
        $modules = etablissement::find(Session::get('idEtabl'))->modules()->get();
        $resultatFinal = array();
        foreach($profils as $profil){
            $ressources = $profil->ressources()->get();
            foreach ($ressources as $res) {
                $resultat = array();
                $resultat["nom_ressource"] = $res->libelle;
                $resultat["nom_profil"] = $profil->libelle;
                $resultat["nbre_user"] = $profil->users()->count();
                $resultat["id_res"] = $res->id_ressource;
                $resultat["id_profil"] = $profil->id_profil;

                $resultatFinal[] = $resultat;
            }
        }

        return view('configuration.content.module.module', compact(['resultatFinal', 'profils', 'modules']));
    }

    public function save_ressource_profil(Request $request){
        $ressources = ressource::where("id_module", $request->id)->get();
        return $ressources;
    }

    public function add_ressource_profil(Request $request){
        $taille = $request->taille;
        $resultat = array();
        for($i=0; $i<$taille; $i++){
            $ressource_profil = ressource_profil::where('id_profil', $request->profil)->where('id_ressource', $request->input('ressource'.$i))->first();
            $resultat[] = $ressource_profil;
            try {
                if ($ressource_profil == null) {
                    $res = ressource_profil::create([
                        "id_profil" => $request->profil,
                        "id_ressource" => $request->input('ressource'.$i),
                        "lecture" => 0,
                        "ecriture" => 0,
                        "modification" => 0,
                        "suppression" => 0,
                    ]);

                    $resultat[] = $res;
                }

            } catch (QueryException $e) {
                $resultat[] = $e->getMessage();
            }

        }

        return $resultat;
    }

    public function delete_ressource_profil(Request $request){

        $succesBD = -1;
        $message = "";
        $ligneT = -1;

        try {
            $res = ressource_profil::where('id_ressource', $request->id_ressource)->where("id_profil", $request->id_profil)->delete();
            $succesBD = 1;
            $ligneT = $request->id;
            $message = "succes de la requete";
        } catch (QueryException $e) {
            if($e->getCode() == '23000'){
                $succesBD = 2;
                $message = $e->getMessage();
            } else {
                $succesBD = 0;
                $message = $e->getMessage();
            }

        }

        $resultat = array(
            'status' => $succesBD,
            'message' => $message,
            'ligneT'  => $ligneT,
        );

        return response()->json($resultat);

    }
}
