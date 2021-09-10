<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\etablissement;
use App\Models\parametrage_matricule;
use Carbon\Carbon;
use DB;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Session;
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

                $array =[
                    "id"=> $id_etablissement,
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
                ];
                 $_SESSION["id_etablissement"] = $id_etablissement;
                $succesBD = 1;
                $message = "Etablissement Enregistrer avec succès...";

                $resultat = array(
                    'status' => $array,
                    'message' => $message,
                );

                return response()->json($resultat);
            } catch (Exception $e) {
                $succesBD = 0;
                echo 'and the error is: ',  $e->getMessage(), "\n";

                $message = $e->getMessage();
            }
        } else {

            $resultat = array(
                'status' => $succesBD,
                'error' => "le nom de létablissement doit étre unique",
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
                    "localisation" => $request->localisation,
                    "logo" =>$input['file'],
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

    public function profilEtablissement()
    {
        $etablissement = etablissement::where('id_etablissement', Session::get('idEtabl'))->get();

        return view('configuration.content.etablissement.profil', compact('etablissement'));
    }

    public function showEtablissementProfil(){

        $etablissement = etablissement::where('id_etablissement', Session::get('idEtabl'))->get();
        return view('configuration.content.etablissement.editProfil', compact('etablissement'));
    }

    public function editEtablissementProfil(Request $request){
        try {

            $request->validate([
                'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            if ($request->file('file')) {
                $image = $request->file('file');
                $input['file'] = time() . '.' . $image->getClientOriginalExtension();
                $imgFile = \Intervention\Image\Facades\Image::make($image->getRealPath());
                $imgFile->save(public_path('logos_etablissements/'. $input['file']));
                $affectedRows2 = DB::table('etablissement')->where('id_etablissement', Session::get('idEtabl'))->update([
                    "nom" => $request->nom,
                    "resp1"=> $request->resp1,
                    "abreviation" => $request->abreviation,
                    "type_etablissement" => $request->type_etablissement,
                    "ville" => $request->ville,
                    "boite_postale" => $request->boite_postale,
                    "telephone" => $request->telephone,
                    "email" => $request->email,
                    "site_web" => $request->site_web,
                    "localisation" => $request->localisation,
                    "logo" =>$input['file'],
                ]);
            }
            else{
                $affectedRows2 = DB::table('etablissement')->where('id_etablissement', Session::get('idEtabl'))->update([
                    "nom" => $request->nom,
                    "resp1"=> $request->resp1,
                    "abreviation" => $request->abreviation,
                    "type_etablissement" => $request->type_etablissement,
                    "ville" => $request->ville,
                    "boite_postale" => $request->boite_postale,
                    "telephone" => $request->telephone,
                    "email" => $request->email,
                    "site_web" => $request->site_web,
                    "localisation" => $request->localisation,
                ]);
            }

            return redirect()->route('show_etablissement')->with('success','Product successfully added.');
        }  catch (Exception $e) {
            echo 'and the error is: ',  $e->getMessage(), "\n";
            return response()->json(['error' =>  $e->getMessage()]);
        }
    }

    public function editMatricule($id){
        if($id == 0){

            $matricule = parametrage_matricule::create([
                "id_etablissement" => Session::get('idEtabl'),
            ]);
            return view('configuration.content.etablissement.editMatricule', compact('matricule'));
        } else {
            $matricule = parametrage_matricule::find($id);
            return view('configuration.content.etablissement.editMatricule', compact('matricule'));
        }
    }

    public function addMatricule(Request $request){

        try {
            $matricule = parametrage_matricule::find($request->id);
            $matricule->prefix_mat = $request->prefix_mat;
            $matricule->prefix2_mat = $request->prefix2_mat;
            $matricule->suffix_mat = $request->suffix_mat;
            $matricule->pos_mat = $request->pos_mat;

            $matricule->save();
            return 1;
        } catch (QueryException $e) {
            return $e->getMessage();
        }

    }
}
