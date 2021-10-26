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

    Route::get('/', 'AdministrationController@adminLogin1')->name('admin.login');

    Route::post('/', 'AdministrationController@adminLogin')->name('admin.authentification');

    Route::post('/admin/register', 'AdministrationController@adminRegister')->name('admin.register')->middleware('auth');

    Route::post('/admin/logout', 'AdministrationController@adminLogout')->name('admin.logout');
/** */

Route::get('/administration/home', 'App\Http\Controllers\HomeController@index')->middleware('auth');

Route::get('/administrateur', 'AdministrationController@getAcceuilAdmin')->name('administration.admin')->middleware('auth');
Route::get('/administrateur/home', 'AdministrationController@home')->name('administration.home')->middleware('auth');
Route::get('/administrateur/etablissement', 'AdministrationController@adminEtablissement')->name('administration.etablissement')->middleware('auth');
Route::get('/administrateur/etablissement/secondaire', 'AdministrationController@adminEtablissementSecondaire')->name('administration.etablissement_secondaire')->middleware('auth');
Route::get('/administrateur/etablissement/universite', 'AdministrationController@adminEtablissementUniversite')->name('administration.etablissement_universite')->middleware('auth');
Route::get('/administrateur/etablissement/primaire', 'AdministrationController@adminEtablissementPrimaire')->name('administration.etablissement_primaire')->middleware('auth');
Route::get('/administrateur/voir_etablissement/{id}', 'AdministrationController@adminVoirEtablissement')->name('etablissement.show')->middleware('auth');
Route::post('/administrateur/ajout_etablissement', 'EtablissementController@ajoutEtablissement')->name('etablissement.ajout')->middleware('auth');
Route::post('/administrateur/modif_etablissement', 'EtablissementController@modifEtablissement')->name('etablissement.modif')->middleware('auth');
Route::post('/administrateur/sup_etablissement', 'EtablissementController@supprimerEtablissement')->name('etablissement.supp')->middleware('auth');
Route::get('/administrateur/edit_etablissement/{id}', 'EtablissementController@EditEtablissement')->name('etablissement.show')->middleware('auth');

Route::get('/administrateur/profil/{id}', 'AdministrationController@voir_profil')->name('admin.voir_profil')->middleware('auth');
Route::get('/administrateur/edit_admin/{id}', 'AdministrationController@edit_profil')->name('admin.edit_profil')->middleware('auth');
Route::get('/administrateur/detail_licence/{id}', 'AdministrationController@detail_licence')->name('admin.detail_licence')->middleware('auth');
Route::get('/administrateur/modif_licence/{id}', 'AdministrationController@modif_licence')->name('admin.modif_licence')->middleware('auth');
Route::post('/administrateur/delete_licence', 'AdministrationController@delete_licence')->name('admin.delete_licence')->middleware('auth');
Route::post('/administrateur/modif_admin', 'AdministrationController@modif_admin')->name('admin.modif')->middleware('auth');
Route::post('/administrateur/delete_admin', 'AdministrationController@delete_admin')->name('admin.delete')->middleware('auth');
Route::post('/administrateur/force_delete_admin', 'AdministrationController@force_delete_admin')->name('admin.delete_force')->middleware('auth');
Route::get('/administrateur/register', 'AdministrationController@adminUtilisateur')->name('administration.utilisateurs')->middleware('auth');
Route::get('/administrateur/secondaire', 'AdministrationController@adminSecondaireUser')->name('administration.adminSecondaireUser')->middleware('auth');
Route::get('/administrateur/primaire', 'AdministrationController@adminPrimaireUser')->name('administration.adminPrimaireUser')->middleware('auth');
Route::get('/administrateur/universite', 'AdministrationController@adminUniversiteUser')->name('administration.adminUniversiteUser')->middleware('auth');
Route::get('/administrateur/licence', 'AdministrationController@adminLicence')->name('administration.licence')->middleware('auth');
Route::get('/administrateur/conf_groupe', 'AdministrationController@adminGroupeConfig')->name('administration.configGroupe')->middleware('auth');
Route::get('/administrateur/conf_param', 'AdministrationController@adminParamConfig')->name('administration.configParam')->middleware('auth');
Route::post('/administrateur/save_licence', 'AdministrationController@save_licence')->name('admin.save_licence')->middleware('auth');
Route::post('/administrateur/modifier_licence', 'AdministrationController@modifier_licence')->name('admin.modifier_licence')->middleware('auth');
Route::post('/administrateur/delete_ressource', 'AdministrationController@delete_ressource')->name('admin.delete_ressource')->middleware('auth');
Route::post('/administrateur/save_ressource', 'AdministrationController@save_ressource')->name('admin.save_ressource')->middleware('auth');
Route::get('/administrateur/edit_droit/{id}', 'AdministrationController@edit_droit')->name('admin.edit_droit')->middleware('auth');
Route::post('/administrateur/save_droit', 'AdministrationController@save_droit')->name('admin.save_droit')->middleware('auth');

require __DIR__.'/user.php';
require __DIR__.'/gestscol.php';
