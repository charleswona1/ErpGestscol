<?php

namespace App\Http\Controllers;

use App\Models\etablissement;
use App\Models\etablissement_user;
use App\Models\profil;
use App\Models\ressource_profil;
use App\Models\User;
use DateTime;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class ConfigurationController extends Controller
{
    public function userLogin1(){
        $etablissement = etablissement::select('id_etablissement', 'nom')->get();
        return view('configuration.index', $data = ['ecoles'=>$etablissement]);
    }

    public function userLogin(Request $request){
        $request->validate([
            'login'=>['required'],
            'password'=>['required'],
            'etablissement'=>['required']
        ]);

        try {
            $model = User::where('login', $request->login)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            $errors = ['error' => 'Login ou Mot de passe incorrect'];
            return redirect()->back()->withErrors($errors);
        }

        if(!Hash::check($request->password, $model->password)){
            $errors = ['error' => 'Login ou Mot de passe incorrect 1'];
            return redirect()->back()->withErrors($errors);
        }

        Auth::guard('users')->login($model);

        $model->last_login = new DateTime('NOW');

        $model->save();

       Session::put('idEtabl', $request->etablissement);

        return redirect()->route('user.home',$request->etablissement)->with('success', 'Bienvenu Mr ou Mme '.$model->nom);

    }

    public function userRegister(Request $request){
        $response = null;

        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'login' => ['required', 'max:255',  Rule::unique(User::class),],
            'telephone' => ['required', 'max:30'],
            'profil' => ['required'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
            ],
            'password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:8'
        ]);

        try {
            $user = User::insertGetId([
                'nom' => $request->nom,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'login' => $request->login,
                'id_profil' => $request->profil,
                'telephone' => $request->telephone,
                'enabled' => false,
                'creation_date' => date("Y-m-d"),
            ]);

            $etablissement_user = etablissement_user::create([
                "id_etablissement" => Session::get('idEtabl'),
                "id_user" => $user,
                "is_default" => true,
                "is_default_annee" => date("Y"),
            ]);

            return $user;
        } catch (QueryException $e) {
            if($e->getCode() == '1364'){
                $succesBD = -2;
            } else {
                $succesBD = 0;
            }
            return $e->getMessage()."     ".$request->profil;
        }
    }

    public function userLogout(){
        Auth::guard('users')->logout();
        return redirect()->route('user.login')->with('success', 'Déconnexion reussie');
    }

    public function configurationHome($id_etablissement){
        return view('configuration.content.dashboard', compact('id_etablissement'));
    }

    public function profilUser() {
        $users = User::all();
        $profils = etablissement::find(Session::get('idEtabl'))->profils()->select('id_profil', 'libelle')->get();
        $resultat = array();
        foreach ($users as $user) {
            $res = array();
            $profil = profil::find($user->id_profil);
            $res['id'] = $user->id_user;
            $res['nom'] = $user->nom;
            $res['login'] = $user->login;
            $res['date'] = $user->creation_date;
            $res['enable'] = $user->enabled;
            $res['telephone'] = $user->telephone;
            $res['groupe'] = $profil->libelle;

            $resultat[] = $res;
        }
        return view('configuration.content.utilisateurs.profil', $data = ["users" => $resultat, "profils"=>$profils]);
    }

    public function modif_profil($id){

        $user = User::find($id);
        $res = array();
        $profil = profil::find($user->id_profil);
        $profils = profil::all();
        $res['nom'] = $user->nom;
        $res['login'] = $user->login;
        $res['date'] = $user->creation_date;
        $res['email'] = $user->email;
        $res['enable'] = $user->enabled;
        $res['telephone'] = $user->telephone;
        $res['groupe'] = $profil->libelle;
        $res['id'] = $id;

        return view('configuration.content.utilisateurs.editProfil', $data = ["user" => $res, "profils" => $profils]);

    }

    public function voir_profil($id){
        $user = User::find($id);
        $res = array();
        $profil = profil::find($user->id_profil);
        $profils = profil::all();
        $res['nom'] = $user->nom;
        $res['login'] = $user->login;
        $res['date'] = $user->creation_date;
        $res['email'] = $user->email;
        $res['enable'] = $user->enabled;
        $res['telephone'] = $user->telephone;
        $res['groupe'] = $profil->libelle;
        $res['id'] = $id;

        return view('configuration.content.utilisateurs.voirProfil', $data = ["user" => $res, "profils" => $profils]);
    }

    public function modif_user(Request $request){

            if($request->presence == 1){
                $validated = $request->validate([
                'nom' => ['string', 'max:255'],
                'telephone' => ['max:30'],
                'email' => [
                    'string',
                    'email',
                    'max:255',
                ],
                'password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'min:8'
            ]);
            try {
                if($request->presence2 == 1)
                    $affectedRows2 = DB::table('users')->where('id_user', $request->id)->update(['nom'=>$request->nom, 'telephone'=>$request->tel, 'enabled'=>$request->activation, 'email'=>$request->email, 'password'=>Hash::make($request->password), 'id_profil'=>$request->groupe]);
                else
                    $affectedRows2 = DB::table('users')->where('id_user', $request->id)->update(['nom'=>$request->nom, 'telephone'=>$request->tel, 'enabled'=>$request->activation, 'email'=>$request->email, 'password'=>Hash::make($request->password)]);

            return 1;
            } catch (Exception $e) {
                return $e->getMessage();
            }

            } else {
                $validated = $request->validate([
                    'nom' => ['string', 'max:255'],
                    'telephone' => ['max:30'],
                    'email' => [
                        'string',
                        'email',
                        'max:255',
                    ],
                ]);

            try {
                if($request->presence2 == 1)
                    $affectedRows2 = DB::table('users')->where('id_user', $request->id)->update(['nom'=>$request->nom, 'telephone'=>$request->tel, 'enabled'=>$request->activation, 'email'=>$request->email, 'id_profil'=>$request->groupe]);
                else
                    $affectedRows2 = DB::table('users')->where('id_user', $request->id)->update(['nom'=>$request->nom, 'telephone'=>$request->tel, 'enabled'=>$request->activation, 'email'=>$request->email]);

                return 2;
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }

    }

    public function delete_user(Request $request){
        $succesBD = -1;
        $message = "";
        $ligneT = -1;

        try {
            $res = User::where('id_user', $request->id)->delete();
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

    public function force_delete_user(Request $request){

        $succesBD = -1;
        $message = "";
        $ligneT = -1;

        try {

            DB::table("etablissement_user")->where("id_user", $request->id)->delete();
            DB::table("user_session")->where("id_user", $request->id)->delete();
            User::find($request->id)->delete();
            $succesBD = 1;
            $ligneT = $request->id;
            $message = "succes de la requete";
        } catch (QueryException $e) {
            $succesBD = 0;
            $message = $e->getMessage();
        }

        $resultat = array(
            'status' => $succesBD,
            'message' => $message,
            'ligneT'  => $ligneT,
        );

        return response()->json($resultat);
    }

    public function groupeUser() {
        $profils = etablissement::find(Session::get('idEtabl'))->profils()->get();

        return view('configuration.content.utilisateurs.groupes', $data = ["profils"=>$profils]);
    }

    public function voir_groupe($id) {
        $profil = profil::find($id);
        $nbreUser = sizeof($profil->users()->get());

        return view('configuration.content.utilisateurs.voirGroupe', compact('profil', 'nbreUser'));

    }

    public function edit_groupe($id){
        $profil = profil::find($id);

        return view('configuration.content.utilisateurs.editGroupe', compact('profil'));
    }

    public function modif_groupe(Request $request) {
        $validated = $request->validate([
            'libelle' => ['required', 'string', 'max:255'],
            'id' => ['required']
        ]);

        try {
            $profil = profil::find($request->id);
            $profil->libelle = $request->libelle;
            $profil->description = $request->description;
            $profil->save();

            return 1;
        } catch (QueryException $e) {
            return $e->getMessage();
        }
    }


    public function supprimer_groupe(Request $request) {

        $succesBD = -1;
        $message = "";
        $ligneT = -1;

        try {
            $res = profil::find($request->id)->delete();
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

    public function save_groupe(Request $request){

        $response = null;

        $request->validate([
            'libelle' => ['required', 'string', 'max:255'],
            'description' => ['required', 'max:255'],
        ]);

        try {
            $profil = profil::insertGetId([
                'libelle' => $request->libelle,
                'description' => $request->description,
                'id_etablissement' => Session::get('idEtabl'),
            ]);

            if(is_numeric($request->heritier) && $request->heritier > 0){
                $ressource_profils = ressource_profil::where("id_profil", $request->heritier)->get();
                foreach ($ressource_profils as $key) {
                    ressource_profil::create([
                        'id_ressource' => $key->id_ressource,
                        'id_profil' => $profil,
                        'lecture' => $key->lecture,
                        'ecriture' => $key->ecriture,
                        'modification' => $key->modification,
                        'suppression' => $key->suppression,
                    ]);
                }
            }

            return $profil;
        } catch (QueryException $e) {
            if($e->getCode() == '1364'){
                $succesBD = -2;
            } else {
                $succesBD = 0;
            }
            return $e->getMessage();
        }

    }

    public function groupeParametrage() {
        $profils = profil::where('id_etablissement', Session::get('idEtabl'))->get();
        $resultatFinal = array();
        foreach ($profils as $profil) {
            $ressources = $profil->ressources()->get();
            foreach ($ressources as $ressource) {
                $param = array();
                $param["nom"] = $profil->libelle;
                $param["ressource"] = $ressource->libelle;
                $param["lecture"] = $ressource->pivot->lecture;
                $param["ecriture"] = $ressource->pivot->ecriture;
                $param["modification"] = $ressource->pivot->modification;
                $param["suppression"] = $ressource->pivot->suppression;
                $param["id"] = $profil->id_profil."_".$ressource->id_ressource;
                $resultatFinal[] = $param;
            }
            
        }
        return view('configuration.content.utilisateurs.parametrage', compact('resultatFinal'));
    }

    public function groupeIdParametrage($id){
        $profils = profil::where('id_etablissement', Session::get('idEtabl'))->get();
        $resultatFinal = array();
        foreach ($profils as $profil) {
            $ressources = $profil->ressources()->get();
            foreach ($ressources as $ressource) {
                $param = array();
                $param["nom"] = $profil->libelle;
                $param["ressource"] = $ressource->libelle;
                $param["lecture"] = $ressource->pivot->lecture;
                $param["ecriture"] = $ressource->pivot->ecriture;
                $param["modification"] = $ressource->pivot->modification;
                $param["suppression"] = $ressource->pivot->suppression;
                $param["id"] = $profil->id_profil."_".$ressource->id_ressource;
                $resultatFinal[] = $param;
            }
            
        }
        return view('configuration.content.utilisateurs.editParametrage', compact('resultatFinal', 'id'));

    }
    
    public function modif_parametre(Request $request){

        $request->validate([
            'profil' => ['required', 'numeric'],
            'ressource' => ['required', 'numeric'],
            'lecture' => ['required', 'boolean'],
            'ecriture' => ['required', 'boolean'],
            'modification' => ['required', 'boolean'],
            'suppression' => ['required', 'boolean'],
        ]);
        try {
            $profil = profil::find($request->profil);
            $profil->ressources()->updateExistingPivot($request->ressource, ['lecture' => $request->lecture, 'ecriture' => $request->ecriture, 'modification' => $request->modification, 'suppression' => $request->suppression]);
            return 1;
        } catch (QueryException $e) {
            return $e->getMessage();
        }

    }
}
