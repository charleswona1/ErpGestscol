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

/** admin login */

    Route::get('/', [App\Http\Controllers\AdministrationController::class, 'adminLogin1'])->name('admin.login');

    Route::post('/', [App\Http\Controllers\AdministrationController::class, 'adminLogin'])->name('admin.authentification');

    Route::post('/admin/register', [App\Http\Controllers\AdministrationController::class, 'adminRegister'])->name('admin.register');

    Route::post('/admin/logout', [App\Http\Controllers\AdministrationController::class, 'adminLogout'])->name('admin.logout');
/** */

Route::get('/administration/home', 'App\Http\Controllers\HomeController@index')->middleware('auth');

Route::get('/administrateur', [App\Http\Controllers\AdministrationController::class, 'getAcceuilAdmin'])->name('administration.admin')->middleware('auth');
Route::get('/administrateur/home', [App\Http\Controllers\AdministrationController::class, 'home'])->name('administration.home')->middleware('auth');
Route::get('/administrateur/etablissement', [App\Http\Controllers\AdministrationController::class, 'adminEtablissement'])->name('administration.etablissement')->middleware('auth');
Route::get('/administrateur/etablissement/secondaire', [App\Http\Controllers\AdministrationController::class, 'adminEtablissementSecondaire'])->name('administration.etablissement_secondaire')->middleware('auth');
Route::get('/administrateur/etablissement/universite', [App\Http\Controllers\AdministrationController::class, 'adminEtablissementUniversite'])->name('administration.etablissement_universite')->middleware('auth');
Route::get('/administrateur/etablissement/primaire', [App\Http\Controllers\AdministrationController::class, 'adminEtablissementPrimaire'])->name('administration.etablissement_primaire')->middleware('auth');
Route::get('/administrateur/voir_etablissement/{id}', [App\Http\Controllers\AdministrationController::class, 'adminVoirEtablissement'])->name('etablissement.show')->middleware('auth');
Route::post('/administrateur/ajout_etablissement', [App\Http\Controllers\EtablissementController::class, 'ajoutEtablissement'])->name('etablissement.ajout')->middleware('auth');
Route::post('/administrateur/modif_etablissement', [App\Http\Controllers\EtablissementController::class, 'modifEtablissement'])->name('etablissement.modif')->middleware('auth');
Route::post('/administrateur/sup_etablissement', [App\Http\Controllers\EtablissementController::class, 'supprimerEtablissement'])->name('etablissement.supp')->middleware('auth');
Route::get('/administrateur/edit_etablissement/{id}', [App\Http\Controllers\EtablissementController::class, 'EditEtablissement'])->name('etablissement.show')->middleware('auth');

Route::get('/administrateur/profil/{id}', [App\Http\Controllers\AdministrationController::class, 'voir_profil'])->name('admin.voir_profil')->middleware('auth');
Route::get('/administrateur/edit_admin/{id}', [App\Http\Controllers\AdministrationController::class, 'edit_profil'])->name('admin.edit_profil')->middleware('auth');
Route::get('/administrateur/detail_licence/{id}', [App\Http\Controllers\AdministrationController::class, 'detail_licence'])->name('admin.detail_licence')->middleware('auth');
Route::get('/administrateur/modif_licence/{id}', [App\Http\Controllers\AdministrationController::class, 'modif_licence'])->name('admin.modif_licence')->middleware('auth');
Route::post('/administrateur/delete_licence', [App\Http\Controllers\AdministrationController::class, 'delete_licence'])->name('admin.delete_licence')->middleware('auth');
Route::post('/administrateur/modif_admin', [App\Http\Controllers\AdministrationController::class, 'modif_admin'])->name('admin.modif')->middleware('auth');
Route::post('/administrateur/delete_admin', [App\Http\Controllers\AdministrationController::class, 'delete_admin'])->name('admin.delete')->middleware('auth');
Route::post('/administrateur/force_delete_admin', [App\Http\Controllers\AdministrationController::class, 'force_delete_admin'])->name('admin.delete_force')->middleware('auth');
Route::get('/administrateur/register', [App\Http\Controllers\AdministrationController::class, 'adminUtilisateur'])->name('administration.utilisateurs')->middleware('auth');
Route::get('/administrateur/secondaire', [App\Http\Controllers\AdministrationController::class, 'adminSecondaireUser'])->name('administration.adminSecondaireUser')->middleware('auth');
Route::get('/administrateur/primaire', [App\Http\Controllers\AdministrationController::class, 'adminPrimaireUser'])->name('administration.adminPrimaireUser')->middleware('auth');
Route::get('/administrateur/universite', [App\Http\Controllers\AdministrationController::class, 'adminUniversiteUser'])->name('administration.adminUniversiteUser')->middleware('auth');
Route::get('/administrateur/licence', [App\Http\Controllers\AdministrationController::class, 'adminLicence'])->name('administration.licence')->middleware('auth');
Route::get('/administrateur/conf_groupe', [App\Http\Controllers\AdministrationController::class, 'adminGroupeConfig'])->name('administration.configGroupe')->middleware('auth');
Route::get('/administrateur/conf_param', [App\Http\Controllers\AdministrationController::class, 'adminParamConfig'])->name('administration.configParam')->middleware('auth');
Route::post('/administrateur/save_licence', [App\Http\Controllers\AdministrationController::class, 'save_licence'])->name('admin.save_licence')->middleware('auth');
Route::post('/administrateur/modifier_licence', [App\Http\Controllers\AdministrationController::class, 'modifier_licence'])->name('admin.modifier_licence')->middleware('auth');
Route::post('/administrateur/delete_ressource', [App\Http\Controllers\AdministrationController::class, 'delete_ressource'])->name('admin.delete_ressource')->middleware('auth');
Route::post('/administrateur/save_ressource', [App\Http\Controllers\AdministrationController::class, 'save_ressource'])->name('admin.save_ressource')->middleware('auth');
Route::get('/administrateur/edit_droit/{id}', [App\Http\Controllers\AdministrationController::class, 'edit_droit'])->name('admin.edit_droit')->middleware('auth');
Route::post('/administrateur/save_droit', [App\Http\Controllers\AdministrationController::class, 'save_droit'])->name('admin.save_droit')->middleware('auth');

require __DIR__.'/user.php';
