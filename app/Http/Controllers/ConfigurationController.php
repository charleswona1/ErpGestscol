<?php

namespace App\Http\Controllers;

use App\Models\etablissement;
use App\Models\profil;
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
            $errors = ['error' => 'Login ou Mot de passe incorrect'];
            return redirect()->back()->withErrors($errors);
        }

        Auth::guard('users')->login($model);

        $model->last_login = new DateTime   ('NOW');

        $model->save();

       Session::put('idEtabl', $request->etablissement);
       
        return redirect()->route('user.home',$request->etablissement)->with('success', 'Bienvenu Mr ou Mme '.$model->nom);

    }

    public function userRegister(Request $request){

        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'login' => ['required', 'unique:admin', 'max:255',  Rule::unique(admin::class),],
            'telephone' => ['required', 'max:30'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
            ],
            'password' => [
                'required',
                'string',
                'confirmed'
            ],
        ]);

        try {
            $admin = admin::create([
                'nom' => $request->nom,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'login' => $request->login,
                'telephone' => $request->telephone,
                'enabled' => false,
                'creation_date' => date("Y-m-d"),
            ]);

            return back()->with('success', 'Enregistrement de l\'administrateur terminé');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
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
        $users = etablissement::find(Session::get('idEtabl'))->users()->select('users.id_user', 'id_profil', 'nom', 'login', 'creation_date', 'enabled', 'telephone', 'users.id_user')->get();
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
        return view('configuration.content.utilisateurs.profil', $data = ["users" => $resultat]);
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
                DB::table("profil")->where("id_user", $request->id)->delete();
                User::where('id_user', $request->id)->delete();
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
}

