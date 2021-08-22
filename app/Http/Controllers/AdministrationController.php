<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\module_etablissement;
use App\Models\module;
use App\Models\licence;
use App\Models\etablissement;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use DB;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;

class AdministrationController extends Controller
{

    public function adminLogin1(){
        return view('administration.login');
    }

    public function adminLogin(Request $request){
        $request->validate([
            'login'=>['required'],
            'password'=>['required']
        ]);

        try {
            $model = admin::where('login', $request->login)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            $errors = ['error' => 'Login ou Mot de passe incorrect'];
            return redirect()->back()->withErrors($errors);
        }
            
        if(!Hash::check($request->password, $model->password)){
            $errors = ['error' => 'Login ou Mot de passe incorrect'];
            return redirect()->back()->withErrors($errors);
        }

        Auth::guard('admins')->login($model);

        //Session::put('nom', $model->nom);
        

        return redirect()->route('administration.home')->with('success', 'Bienvenu Mr ou Mme '.$model->nom);
 
    }

    public function adminRegister(Request $request){
        
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

    public function adminLogout(){
        Auth::guard('admins')->logout();

        return redirect()->route('admin.login')->with('success', 'Déconnexion reussie');
    }

    public function getAcceuilAdmin()
    {
        $count_etablissemnt = DB::table('etablissement')->count();
       $primaire =  DB::table('etablissement')->where('type_etablissement', 'Primaire')->count();
       $secondaire =  DB::table('etablissement')->where('type_etablissement', 'Secondaire')->count();
       $universite =  DB::table('etablissement')->where('type_etablissement', 'Université')->count();

        // dd($count_etablissemnt);

    	return view('administration.index1', compact('count_etablissemnt','primaire','secondaire','universite'));
    }

    public function home()
    {
    	return view('administration.home');
    }

    public function adminEtablissement()
    {
        $etablissements = etablissement::all();
    	return view('administration.etablissements', compact('etablissements'));
    }

    public function adminUtilisateur()
    {
         $listAdmin = admin::all();
    	return view('administration.utilisateurs', $data = ["listAdmin" => $listAdmin]);
    }

    public function adminLicence()
    {
        $module_e = module_etablissement::all();

        $listLicence = array();
        $mesmodules = array();
        foreach ($module_e as $mod) {
            $mod1 = array();
            $module = module::where('id_module', '=', $mod->id_module)
                            ->select('module.nom', 'module.status', 'module.code', 'module.description')
                            ->get();

            $licence = licence::where('id_licence', '=', $mod->id_licence)
                                ->select('licence.creation_date', 'licence.expiration_date', 'licence.status', 'licence.numero')
                                ->get();

            $etablissement = etablissement::where('id_etablissement', '=', $mod->id_etablissement)
                                            ->select('nom')
                                            ->get();

            $mod1['nom'] = $etablissement[0]->nom;
            $mod1['id_mod'] = $mod->id_module.'_'.$mod->id_etablissement;
            $mod1['module'] = $module[0]->nom;
            $mod1['numero_licence'] = $licence[0]->numero;
            $mod1['date_debut'] = $licence[0]->creation_date;
            $mod1['expiration'] = $licence[0]->expiration_date;
            $mod1['status'] = $licence[0]->status;
            $mod1['nbreJ'] = round((strtotime($licence[0]->expiration_date) - strtotime($licence[0]->creation_date)) / (60 * 60 * 24));

            $mesmodules[] = $mod1;
        }
        $listLicence[] = $mesmodules;
        $listLicence[] = module::all();
        $listLicence[] = etablissement::all();

    	return view('administration.licences', $data = ['modules' => $listLicence]);
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

    public function save_licence(Request $request){
        $faker = \Faker\Factory::create();

        $validated = $request->validate([
            'etablissement' => ['required'],
            'module' => ['required'],
            'date_debut' => ['required'],
            'date_expiration' => ['required'],
        ]);

        if (strcmp($request->date_debut, $request->date_expiration) > 0) {
            return -2;
        }

        try {
            
            $etablissement = etablissement::where('id_etablissement', '=', $request->etablissement)
                            ->select('id_etablissement')
                            ->get();

            $module = module::where('id_module', $request->module)
                            ->select('id_module')
                            ->get();

            $numLicence = $faker->swiftBicNumber;

            $licence=DB::table('licence')->insertGetId([
                    'numero'=> $numLicence,
                    'creation_date' => $request->date_debut,
                    'expiration_date' => $request->date_expiration,
                    'status' => false,
                ]);

            $module_e = new module_etablissement();
            $module_e->id_module = (int)$request->module;
            $module_e->id_etablissement = (int)$request->etablissement;
            $module_e->id_licence = $licence;
            $module_e->date_expiration = $request->date_expiration;
            $module_e->numero_licence = $numLicence;

            $module_e->save();

            return 1;

        } catch (Exception $e) {
            return $e->getMessage();
        }

        

    }

    public function detail_licence($id)
    {
        $ids = explode('_', $id);

        $mod = module_etablissement::where('id_module', '=', $ids[0])
                                    ->where('id_etablissement', '=', $ids[1])
                                    ->get();

        $mod1 = array();

        $module = module::where('id_module', '=', $ids[0])
                        ->select('module.nom', 'module.status', 'module.code', 'module.description')
                        ->get();

        $licence = licence::where('id_licence', '=', $mod[0]->id_licence)
                            ->select('licence.creation_date', 'licence.expiration_date', 'licence.status', 'licence.numero')
                            ->get();

        $etablissement = etablissement::where('id_etablissement', '=', $ids[1])
                                        ->select('nom')
                                        ->get();

        $mod1['nom'] = $etablissement[0]->nom;
        $mod1['module'] = $module[0]->nom;
        $mod1['numero_licence'] = $licence[0]->numero;
        $mod1['date_debut'] = $licence[0]->creation_date;
        $mod1['expiration'] = $licence[0]->expiration_date;
        $mod1['status'] = $licence[0]->status;
        $mod1['nbreJ'] = round((strtotime($licence[0]->expiration_date) - strtotime($licence[0]->creation_date)) / (60 * 60 * 24));

        return view('administration.licence-profil', $data = ['module' => $mod1]);

    }

    public function delete_licence(request $request)
    {
        $ids = explode('_', $request->id);
        $succesBD = -1; 
        $message = "";
        $ligneT = -1;

        try {
            $mod = module_etablissement::where('id_module', '=', $ids[0])
                                    ->where('id_etablissement', '=', $ids[1])
                                    ->get();

            $res = licence::where('id_licence', $mod[0]->id_licence)->delete();

            $res = module_etablissement::where('id_module', $ids[0])
                                        ->where('id_etablissement', '=', $ids[1])
                                        ->delete();

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

    public function modif_licence($id){

        $ids = explode('_', $id);
        $mod1 = array();

        try {
            $mod = module_etablissement::where('id_module', '=', $ids[0])
                                    ->where('id_etablissement', '=', $ids[1])
                                    ->get();

            $mod1 = array();
            $module = module::where('id_module', '=', $ids[0])
                            ->select('module.id_module', 'module.nom', 'module.status', 'module.code', 'module.description')
                            ->get();

            $licence = licence::where('id_licence', '=', $mod[0]->id_licence)
                                ->select('licence.creation_date', 'licence.expiration_date', 'licence.status', 'licence.numero')
                                ->get();

            $etablissement = etablissement::where('id_etablissement', '=', $ids[1])
                                            ->select('nom')
                                            ->get();

            $mod1['nom'] = $etablissement[0]->nom;
            $mod1['module'] = $module[0]->nom;
            $mod1['module_id'] = $module[0]->id_module;
            $mod1['numero_licence'] = $licence[0]->numero;
            $mod1['date_debut'] = $licence[0]->creation_date;
            $mod1['expiration'] = $licence[0]->expiration_date;
            $mod1['status'] = $licence[0]->status;
            $mod1['id'] = $id;
            $mod1['nbreJ'] = round((strtotime($licence[0]->expiration_date) - strtotime($licence[0]->creation_date)) / (60 * 60 * 24));

            $module1 = module::where('id_module', '<>', $ids[0])
                            ->select('module.nom', 'module.id_module')
                            ->get();

            $niv = 0;
            foreach ($module1 as $m) {
                $mod1['module'.$niv] = $m->nom;
                $mod1['module_id'.$niv] = $m->id_module;
                $niv++;
            }

            $mod1['nbreM'] = $niv;

            return view('administration.licence-profiledit', $data = ['module' => $mod1]);

        } catch (Exception $e) {
            return view('administration.licence-profiledit', $data = ['module' => $mod1]);
        }

        

    }

    public function modifier_licence(Request $request){

        $ids = explode('_', $request->id);
        try{

            $mod = module_etablissement::where('id_module', '=', (int)$ids[0])
                                        ->where('id_etablissement', '=', (int)$ids[1])
                                        ->get();

            $mod1 = array();

            $affectedRows2 = DB::table('module_etablissement')
                            ->where('id_module', $ids[0])
                            ->where('id_etablissement', $ids[1])
                            ->update(['date_expiration'=>$request->date_expiration, 'id_module'=>$request->module]);

            $affectedRows2 = DB::table('licence')
                            ->where('id_licence', $mod[0]->id_licence)
                            ->update(['creation_date'=>$request->date_debut, 'expiration_date'=>$request->date_expiration, 'status'=>$request->status]);
            return 1;
        } catch (Exception $e) {
           return $e->getMessage(); 
        }
    }
}
