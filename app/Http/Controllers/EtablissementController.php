<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\etablissement;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Cookie;

class EtablissementController extends Controller
{
    public function showEtablissement($id)
    {
        $etablissement = etablissement::where('id_etablissement', $id)->get();
        return view('administration.etablissement-profil', compact('etablissement'));
    }
    public function EditEtablissement($id)
    {
        $etablissement = etablissement::where('id_etablissement', $id)->get();
        return view('administration.etablissement-profiledit', compact('etablissement'));
    }
    public function ajoutEtablissement(Request $request)
    {
        session_start();

        $succesBD = -1;
        $message = "";
        if ($request->session()->get("user_id") == "") {
            try {
                $request->validate([
                    'nom' => 'required|unique:etablissement',
                    'telephone' => 'required',
                    'email' => 'required',
                    'abreviation' => 'required',
                    'type_etablissement' => 'required',
                    'ville' => 'required',
                    'boite_postale' => 'required',
                    'fax' => 'required',
                    'site_web' => 'required',
                    'localisation' => 'required',
                ]);

                $id_etablissement = DB::table('etablissement')->insertGetId([
                    "nom" => $request->nom,
                    "telephone" => $request->telephone,
                    "email" => $request->email,
                    "abreviation" => $request->abreviation,
                    "type_etablissement" => $request->type_etablissement,
                    "ville" => $request->ville,
                    "boite_postale" => $request->boite_postale,
                    "fax" => $request->fax,
                    "site_web" => $request->site_web,
                    "localisation" => $request->localisation,
                    "creation_date" => Carbon::now()->format('Y-m-d')
                ]);

                $_SESSION["id_etablissement"] = $id_etablissement;
                $succesBD = 1;
                $message = "Etablissement Enregistrer avec succés...";
                $resultat = array(
                    'status' => $succesBD,
                    'message' => $message,
                );

                return response()->json($resultat);
            } catch (Exception $e) {
                $succesBD = 0;
                $message = $e->getMessage();
            }
        } else {

            $resultat = array(
                'status' => $succesBD,
                'message' => $message,
            );

            return response()->json($resultat);
        }
    }


    public function modifEtablissement(Request $request)
    {
        $succesBD = -1;
        $message = "";
        if ($request->session()->get("user_id") == "") {
            try {
                $affectedRows2 = DB::table('etablissement')->where('id_etablissement', $request->id)->update([
                    "nom" => $request->nom,
                    "telephone" => $request->telephone,
                    "email" => $request->email,
                    "abreviation" => $request->abreviation,
                    "type_etablissement" => $request->type_etablissement,
                    "ville" => $request->ville,
                    "boite_postale" => $request->boite_postale,
                    "fax" => $request->fax,
                    "site_web" => $request->site_web,
                    "localisation" => $request->localisation
                ]);
                $succesBD = 1;
                $message = "Etablissement mise a jour";
            } catch (Exception $e) {
                $succesBD = 0;
                $message = $e->getMessage();
            }

            $resultat = array(
                'status' => $succesBD,
                'message' => $message,
            );

            return response()->json($resultat);
        } else {

            $resultat = array(
                'status' => $succesBD,
                'message' => $message,
            );

            return response()->json($resultat);
        }
    }

    public function supprimerEtablissement(Request $request)
    {
        $succesBD = -1;
        $message = "";
        if ($request->session()->get("user_id") == "") {
            try {
                $res = etablissement::where('id_etablissement', $request->id)->delete();
                $succesBD = 1;
                $message = "Etablissement supprimer";
            } catch (Exception $e) {
                $succesBD = 0;
                $message = $e->getMessage();
            }

            $resultat = array(
                'status' => $succesBD,
                'message' => $message,
            );

            return response()->json($resultat);
        } else {

            $resultat = array(
                'status' => $succesBD,
                'message' => $message,
            );

            return response()->json($resultat);
        }
    }

    public function profilEtablissement($id)
    {
        $etablissement = etablissement::where('id_etablissement', $id)->get();
        return view('configuration.content.etablissement.profil', compact('etablissement'));
    }
}
