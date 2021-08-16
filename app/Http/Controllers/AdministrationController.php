<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\module_etablissement;
use App\Models\module;
use App\Models\licence;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use DB;

class AdministrationController extends Controller
{

    public function getAcceuilAdmin()
    {
    	return view('administration.index1');
    }

    public function home()
    {
    	return view('administration.home');
    }

    public function adminEtablissement()
    {
    	return view('administration.etablissements');
    }

    public function adminUtilisateur()
    {
    	return view('administration.utilisateurs');
    }

    public function adminLicence()
    {
        $module_e = module_etablissement::all();
        foreach ($module_e as $mod) {
            $module = module::where('id_module', '=', $mod->id_module)
                            ->select('module.nom', 'licence.expiration_date', 'licence.status', 'licence.numero')
                            ->get();

            $licence = licence::where('id_licence', '=', $mod->id_licence)
                                ->select('licence.creation_date', 'licence.expiration_date', 'licence.status', 'licence.numero')
                                ->get();
        }
    	return view('administration.licences');
    }

    public function adminGroupeConfig()
    {
    	return view('administration.config-admin-groupe');
    }

    public function adminParamConfig()
    {
    	return view('administration.config-admin-parametrages');
    }

    public function voir_profil($id)
    {
        $admin = admin::find($id);
        return view('administration.utilisateur-profil', $data = ['admin' => $admin]);
    }

    public function edit_profil($id)
    {
        $admin = admin::find($id);
        return view('administration.utilisateur-profiledit', $data = ['admin' => $admin]);
    }

    public function modif_admin(Request $request)
    {
        if($request->index_pass == 1){
            $validated = $request->validate([
            'nom' => ['string', 'max:255'],
            'login' => ['unique:admin', 'max:255',  Rule::unique(admin::class)],
            'telephone' => ['max:30'],
            'email' => [
                'string',
                'email',
                'max:255',
            ],
            'password' => ['confirmed', Password::min(8)],
        ]);
        try {
           $affectedRows2 = DB::table('admin')->where('id_admin', $request->id)->update(['nom'=>$request->nom, 'login'=>$request->login, 'telephone'=>$request->telephone, 'email'=>$request->email, 'password'=>Hash::make($request->password)]);
           return 1;
        } catch (Exception $e) {
            return $e->getMessage();
        }
        
        }else{
            $validated = $request->validate([
                'nom' => ['string', 'max:255'],
                'login' => ['unique:admin', 'max:255',  Rule::unique(admin::class)],
                'telephone' => ['max:30'],
                'email' => [
                    'string',
                    'email',
                    'max:255',
                ],
            ]);
        }

        try {
           $affectedRows2 = DB::table('admin')->where('id_admin', $request->id)->update(['nom'=>$request->nom, 'login'=>$request->login, 'telephone'=>$request->telephone, 'email'=>$request->email]);
           return 1;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function delete_admin(Request $request)
    {
        $succesBD = -1; 
        $message = "";
        $ligneT = -1;

        try {
            $res = admin::where('id_admin', $request->id)->delete();
            $succesBD = 1;
            $ligneT = $request->id;
            $message = "succes de la requete";
        } catch (Exception $e) {
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
