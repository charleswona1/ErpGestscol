<?php

namespace App\Http\Controllers;

use App\Models\annee_academique;
use App\Models\etablissement;
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
}
