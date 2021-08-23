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
Route::get('/administrateur/profil/{id}', [App\Http\Controllers\AdministrationController::class, 'voir_profil'])->name('admin.voir_profil')->middleware('auth');
Route::get('/administrateur/edit_admin/{id}', [App\Http\Controllers\AdministrationController::class, 'edit_profil'])->name('admin.edit_profil')->middleware('auth');
Route::get('/administrateur/detail_licence/{id}', [App\Http\Controllers\AdministrationController::class, 'detail_licence'])->name('admin.detail_licence')->middleware('auth');
Route::get('/administrateur/modif_licence/{id}', [App\Http\Controllers\AdministrationController::class, 'modif_licence'])->name('admin.modif_licence')->middleware('auth');
Route::post('/administrateur/delete_licence', [App\Http\Controllers\AdministrationController::class, 'delete_licence'])->name('admin.delete_licence')->middleware('auth');
Route::post('/administrateur/modif_admin', [App\Http\Controllers\AdministrationController::class, 'modif_admin'])->name('admin.modif')->middleware('auth');
Route::post('/administrateur/delete_admin', [App\Http\Controllers\AdministrationController::class, 'delete_admin'])->name('admin.delete')->middleware('auth');
Route::get('/administrateur/register', [App\Http\Controllers\AdministrationController::class, 'adminUtilisateur'])->name('administration.utilisateurs');
Route::get('/administrateur/licence', [App\Http\Controllers\AdministrationController::class, 'adminLicence'])->name('administration.licence');
Route::get('/administrateur/conf_groupe', [App\Http\Controllers\AdministrationController::class, 'adminGroupeConfig'])->name('administration.configGroupe');
Route::get('/administrateur/conf_param', [App\Http\Controllers\AdministrationController::class, 'adminParamConfig'])->name('administration.configParam');
Route::post('/administrateur/save_licence', [App\Http\Controllers\AdministrationController::class, 'save_licence'])->name('admin.save_licence')->middleware('auth');
Route::post('/administrateur/modifier_licence', [App\Http\Controllers\AdministrationController::class, 'modifier_licence'])->name('admin.modifier_licence')->middleware('auth');


/** ROUTES CONFIGURATION */

Route::get('/configuration/dashboard', function () {
    return view('configuration.content.dashboard');
});

/**Etablissement */

Route::get('/configuration/profilE/{id}', [App\Http\Controllers\EtablissementController::class, 'profilEtablissement']);
Route::post('/configuration/addDocument', [App\Http\Controllers\DocumentController::class, 'addDocument'])->name('document.ajout');


Route::get('/configuration/editProfil', function () {
    return view('configuration.content.etablissement.editProfil');
});

Route::get('/configuration/matricule', function () {
    return view('configuration.content.etablissement.matricule');
});

Route::get('/configuration/editMatricule', function () {
    return view('configuration.content.etablissement.editMatricule');
});

Route::get('/configuration/periode', function () {
    return view('configuration.content.etablissement.periode');
});

Route::get('/configuration/editPeriode', function () {
    return view('configuration.content.etablissement.editPeriode');
});
/**end */

/**Utilisateur */
Route::get('/configuration/utilisateur/profilU', function () {
    return view('configuration.content.utilisateurs.profil');
});

Route::get('/configuration/utilisateur/editProfilU', function () {
    return view('configuration.content.utilisateurs.editProfil');
});

Route::get('/configuration/utilisateur/groupe', function () {
    return view('configuration.content.utilisateurs.groupes');
});

Route::get('/configuration/utilisateur/editGroupe', function () {
    return view('configuration.content.utilisateurs.editGroupe');
});

Route::get('/configuration/utilisateur/parametrage', function () {
    return view('configuration.content.utilisateurs.parametrage');
});

Route::get('/configuration/utilisateur/editParametrage', function () {
    return view('configuration.content.utilisateurs.editParametrage');
});
/**end */

/** Documentations */
Route::get('/configuration/documentation/documents/{id}',  [App\Http\Controllers\DocumentController::class, 'getDocument']);
Route::get('/configuration/documentation/deleteDocument/{id}',  [App\Http\Controllers\DocumentController::class, 'deleteDocument'])->name('delete.docu');

Route::get('/configuration/documentation/editDocuments', function () {
    return view('configuration.content.documentations.editDocument');
});

Route::get('/configuration/documentation/entete', function () {
    return view('configuration.content.documentations.entete');
});

Route::get('/configuration/documentation/editEntete', function () {
    return view('configuration.content.documentations.editEntete');
});


Route::get('/configuration/documentation/signature', function () {
    return view('configuration.content.documentations.signature');
});

Route::get('/configuration/documentation/editSignature', function () {
    return view('configuration.content.documentations.editSignature');
});
/**end */

/**other menu */
Route::get('/configuration/annee', function () {
    return view('configuration.content.annee.annee');
});

Route::get('/configuration/module', function () {
    return view('configuration.content.module.module');
});
/**end */

require __DIR__.'/user.php';
