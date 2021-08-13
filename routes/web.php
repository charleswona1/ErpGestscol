<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('administration.login');
});

Route::get('/administration/home', 'App\Http\Controllers\HomeController@index');

Route::get('/administrateur', [App\Http\Controllers\AdministrationController::class, 'getAcceuilAdmin'])->name('administration.admin');
Route::get('/administrateur/home', [App\Http\Controllers\AdministrationController::class, 'home'])->name('administration.home');
Route::get('/administrateur/etablissement', [App\Http\Controllers\AdministrationController::class, 'adminEtablissement'])->name('administration.etablissement');
//Route::get('/administrateur/register', [App\Http\Controllers\AdministrationController::class, 'adminUtilisateur'])->name('administration.utilisateurs');
Route::get('/administrateur/licence', [App\Http\Controllers\AdministrationController::class, 'adminLicence'])->name('administration.licence');
Route::get('/administrateur/conf_groupe', [App\Http\Controllers\AdministrationController::class, 'adminGroupeConfig'])->name('administration.configGroupe');
Route::get('/administrateur/conf_param', [App\Http\Controllers\AdministrationController::class, 'adminParamConfig'])->name('administration.configParam');

Route::get('/utilisateur/enregistrer', [App\Http\Controllers\UserController::class, 'createUser'])->name('user.add');
Route::get('/utilisateur/connecter', [App\Http\Controllers\UserController::class, 'connectUser'])->name('user.connect');
Route::post('/utilisateur/sauvegarder', [App\Http\Controllers\UserController::class, 'saveUser'])->name('user.save');
Route::get('/utilisateur/authentification', [App\Http\Controllers\UserController::class, 'authUser'])->name('user.auth');
Route::get('/utilisateur/usr', [App\Http\Controllers\UserController::class, 'getUser'])->name('user.getUser');
Route::get('/utilisateur/list', [App\Http\Controllers\UserController::class, 'listUser'])->name('user.list');
Route::get('/utilisateur/groupe', [App\Http\Controllers\UserController::class, 'groupUser'])->name('user.group');
Route::get('/utilisateur/tableauBord', [App\Http\Controllers\UserController::class, 'UserTb'])->name('user.tb');


Route::get('/administrateur/enregistrer', [App\Http\Controllers\AdminController::class, 'createAdmin'])->name('admin.add');
Route::get('/administrateur/connecter', [App\Http\Controllers\AdminController::class, 'connectAdmin'])->name('admin.connect');
Route::post('/administrateur/sauvegarder', [App\Http\Controllers\AdminController::class, 'saveAdmin'])->name('admin.save');
Route::get('/administrateur/authentification', [App\Http\Controllers\AdminController::class, 'authAdmin'])->name('admin.auth');

Route::get('/eleve/authenfication', [App\Http\Controllers\EleveController::class, 'authEleve'])->name('eleve.auth');
Route::get('/eleve/addEleve', [App\Http\Controllers\EleveController::class, 'addEleve'])->name('eleve.add');
Route::post('/eleve/ajoutEleve', [App\Http\Controllers\EleveController::class, 'ajoutEleve'])->name('eleve.ajout');

Route::get('/enseignant/addEnseignant', [App\Http\Controllers\EnseignantController::class, 'addEnseignant'])->name('enseignant.add');

Route::get('/licence', [App\Http\Controllers\LicenceController::class, 'getLicence'])->name('licence.get');
Route::post('/licence/ajoutLicence', [App\Http\Controllers\LicenceController::class, 'ajoutLicence'])->name('licence.ajout');
Route::post('/licence/modifLicence', [App\Http\Controllers\LicenceController::class, 'modifLicence'])->name('licence.modif');
Route::post('/licence/supprimerLicence', [App\Http\Controllers\LicenceController::class, 'supLicence'])->name('licence.sup');

Route::get('/etablissement', [App\Http\Controllers\EtablissementController::class, 'getEtablissement'])->name('etablissement.get');
Route::post('/etablissement/ajoutEtablissement', [App\Http\Controllers\EtablissementController::class, 'ajoutEtablissement'])->name('etablissement.ajout');
Route::post('/etablissement/modifEtablissement', [App\Http\Controllers\EtablissementController::class, 'modifEtablissement'])->name('etablissement.modif');
Route::post('/etablissement/modifEtablissement', [App\Http\Controllers\EtablissementController::class, 'modifEtablissement'])->name('etablissement.modif');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/gestscol', [App\Http\Controllers\HomeController::class, 'home_gestscol'])->name('gestscol.home');
Route::get('/configuration', [App\Http\Controllers\HomeController::class, 'home_configuration'])->name('configuration.home');


Route::post('/classe/ajouterClasse', [App\Http\Controllers\ClasseController::class, 'store'])->name('classe.store');