<?php

namespace App\Http\Controllers;

use App\Models\etablissement;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
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
}