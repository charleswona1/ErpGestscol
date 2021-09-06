<?php

use App\Models\etablissement;
use App\Models\profil;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

	/** user login for configuration */
		Route::get('/configuration', [App\Http\Controllers\ConfigurationController::class, 'userLogin1'])->name('user.login');

		Route::post('/configuration', [App\Http\Controllers\ConfigurationController::class, 'userLogin'])->name('user.authentification');

		Route::get('/configuration/home/{id}', [App\Http\Controllers\ConfigurationController::class, 'configurationHome'])->name('user.home')->middleware('authUser');

		Route::post('/user/register', [App\Http\Controllers\ConfigurationController::class, 'userRegister'])->name('user.register')->middleware('authUser');

		Route::post('/user/logout', [App\Http\Controllers\ConfigurationController::class, 'userLogout'])->name('user.logout');
	/** */

	/** ROUTES CONFIGURATION */

Route::get('/configuration/dashboard', function () {
    return view('configuration.content.dashboard');
})->middleware('authUser');;

/**Etablissement */
// Route::get('/configuration/profilE', function () {
// 	$etablissement = etablissement::find(Session::get('idEtabl'));
// 	$modules = $etablissement->modules;
//     return view('configuration.content.etablissement.profil', $data = ['etablissement'=>$etablissement, 'modules'=>$modules]);
// });

Route::get('/configuration/profilE', [App\Http\Controllers\EtablissementController::class, 'profilEtablissement'])->middleware('authUser');


Route::get('/configuration/showProfil', [App\Http\Controllers\EtablissementController::class, 'showEtablissementProfil'])->name('show_etablissement')->middleware('authUser');

Route::post('/configuration/modifierProfil', [App\Http\Controllers\EtablissementController::class, 'editEtablissementProfil'])->middleware('authUser');

Route::get('/configuration/matricule', function () {
    return view('configuration.content.etablissement.matricule');
})->middleware('authUser');;

Route::get('/configuration/editMatricule', function () {
    return view('configuration.content.etablissement.editMatricule');
})->middleware('authUser');;

/**end */

/**Utilisateur */
Route::get('/configuration/utilisateur/profilU', [App\Http\Controllers\ConfigurationController::class, 'profilUser'])->name('users.profil')->middleware('authUser');
Route::get('/configuration/utilisateur/modif_profil/{id}', [App\Http\Controllers\ConfigurationController::class, 'modif_profil'])->name('users.modif_profil')->middleware('authUser');
Route::get('/configuration/utilisateur/voir_profil/{id}', [App\Http\Controllers\ConfigurationController::class, 'voir_profil'])->name('users.voir_profil')->middleware('authUser');
Route::post('/configuration/utilisateur/modif_user', [App\Http\Controllers\ConfigurationController::class, 'modif_user'])->name('user.modif')->middleware('authUser');
Route::post('/configuration/utilisateur/supprimer_user', [App\Http\Controllers\ConfigurationController::class, 'delete_user'])->name('user.delete')->middleware('authUser');
Route::post('/configuration/utilisateur/force_supprimer_user', [App\Http\Controllers\ConfigurationController::class, 'force_delete_user'])->name('user.delete_force')->middleware('authUser');
/**end */

/** Utilisateur groupe */
Route::get('/configuration/utilisateur/groupe', [App\Http\Controllers\ConfigurationController::class, 'groupeUser'])->name('users.groupe')->middleware('authUser');
Route::get('/configuration/utilisateur/voir_groupe/{id}', [App\Http\Controllers\ConfigurationController::class, 'voir_groupe'])->name('users.voir_groupe')->middleware('authUser');
Route::get('/configuration/utilisateur/edit_groupe/{id}', [App\Http\Controllers\ConfigurationController::class, 'edit_groupe'])->name('users.edit_groupe')->middleware('authUser');
Route::post('/configuration/utilisateur/modif_groupe', [App\Http\Controllers\ConfigurationController::class, 'modif_groupe'])->name('users.modif_groupe')->middleware('authUser');
Route::post('/configuration/utilisateur/supprimer_groupe', [App\Http\Controllers\ConfigurationController::class, 'supprimer_groupe'])->name('users.supprimer_groupe')->middleware('authUser');
Route::post('/configuration/utilisateur/save_groupe', [App\Http\Controllers\ConfigurationController::class, 'save_groupe'])->name('users.save_groupe')->middleware('authUser');
Route::get('/configuration/utilisateur/parametrage', [App\Http\Controllers\ConfigurationController::class, 'groupeParametrage'])->name('users.groupeParam')->middleware('authUser');
Route::get('/configuration/utilisateur/editParametrage/{id}', [App\Http\Controllers\ConfigurationController::class, 'groupeIdParametrage'])->name('users.groupeIdParam')->middleware('authUser');
Route::post('/configuration/utilisateur/modif_parametre', [App\Http\Controllers\ConfigurationController::class, 'modif_parametre'])->name('users.modif_parametre')->middleware('authUser');

/** end */

/** Documentations */
Route::get('/configuration/documentation/documents', function () {
    return view('configuration.content.documentations.document');
})->middleware('authUser');;

Route::get('/configuration/documentation/documents/{id}', [App\Http\Controllers\DocumentController::class, 'getDocument'])->middleware('authUser');

Route::post('/configuration/addDocument', [App\Http\Controllers\DocumentController::class, 'addDocument'])->name('document.ajout')->middleware('authUser');

Route::get('/configuration/documentation/deleteDocument/{id}',  [App\Http\Controllers\DocumentController::class, 'deleteDocument'])->name('delete.docu')->middleware('authUser');
Route::get('/configuration/documentation/editDocuments', function () {
    return view('configuration.content.documentations.editDocument');
})->middleware('authUser');;

Route::get('/configuration/documentation/entete', function () {
    return view('configuration.content.documentations.entete');
})->middleware('authUser');;

Route::get('/configuration/documentation/editEntete', function () {
    return view('configuration.content.documentations.editEntete');
})->middleware('authUser');;


Route::get('/configuration/documentation/signature', function () {
    return view('configuration.content.documentations.signature');
})->middleware('authUser');;

Route::get('/configuration/documentation/editSignature', function () {
    return view('configuration.content.documentations.editSignature');
})->middleware('authUser');;
/**end */

/**other menu */
Route::get('/configuration/annee', function () {
    return view('configuration.content.annee.annee');
})->middleware('authUser');;

Route::get('/configuration/module', function () {
    return view('configuration.content.module.module');
})->middleware('authUser');;

?>
