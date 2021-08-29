<?php

use App\Models\etablissement;
use App\Models\profil;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

	/** user login for configuration */
		Route::get('/configuration', [App\Http\Controllers\ConfigurationController::class, 'userLogin1'])->name('user.login');

		Route::post('/configuration', [App\Http\Controllers\ConfigurationController::class, 'userLogin'])->name('user.authentification');

		Route::get('/configuration/home/{id}', [App\Http\Controllers\ConfigurationController::class, 'configurationHome'])->name('user.home');

		Route::post('/user/register', [App\Http\Controllers\ConfigurationController::class, 'userRegister'])->name('user.register');

		Route::post('/user/logout', [App\Http\Controllers\ConfigurationController::class, 'userLogout'])->name('user.logout');
	/** */

	/** ROUTES CONFIGURATION */

Route::get('/configuration/dashboard', function () {
    return view('configuration.content.dashboard');
});

/**Etablissement */
// Route::get('/configuration/profilE', function () {
// 	$etablissement = etablissement::find(Session::get('idEtabl'));
// 	$modules = $etablissement->modules;
//     return view('configuration.content.etablissement.profil', $data = ['etablissement'=>$etablissement, 'modules'=>$modules]);
// });

Route::get('/configuration/profilE', [App\Http\Controllers\EtablissementController::class, 'profilEtablissement']);


Route::get('/configuration/showProfil', [App\Http\Controllers\EtablissementController::class, 'showEtablissementProfil'])->name('show_etablissement');

Route::post('/configuration/modifierProfil', [App\Http\Controllers\EtablissementController::class, 'editEtablissementProfil']);

Route::get('/configuration/matricule', function () {
    return view('configuration.content.etablissement.matricule');
});

Route::get('/configuration/editMatricule', function () {
    return view('configuration.content.etablissement.editMatricule');
});

/**end */

/**Utilisateur */
Route::get('/configuration/utilisateur/profilU', [App\Http\Controllers\ConfigurationController::class, 'profilUser'])->name('users.profil');
Route::get('/configuration/utilisateur/modif_profil/{id}', [App\Http\Controllers\ConfigurationController::class, 'modif_profil'])->name('users.modif_profil');
Route::get('/configuration/utilisateur/voir_profil/{id}', [App\Http\Controllers\ConfigurationController::class, 'voir_profil'])->name('users.voir_profil');
Route::post('/configuration/utilisateur/modif_user', [App\Http\Controllers\ConfigurationController::class, 'modif_user'])->name('user.modif');
Route::post('/configuration/utilisateur/supprimer_user', [App\Http\Controllers\ConfigurationController::class, 'delete_user'])->name('user.delete');
Route::post('/configuration/utilisateur/force_supprimer_user', [App\Http\Controllers\ConfigurationController::class, 'force_delete_user'])->name('user.delete_force');


/**end */

/** Documentations */
<<<<<<< HEAD
Route::get('/configuration/documentation/documents', function () {
    return view('configuration.content.documentations.document');
=======
Route::get('/configuration/documentation/documents/{id}', [App\Http\Controllers\DocumentController::class, 'getDocument']);

Route::post('/configuration/addDocument', [App\Http\Controllers\DocumentController::class, 'addDocument'])->name('document.ajout');

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
>>>>>>> 8d7b7908378e08cd6031d9ad1a67144fae1b1eb9
});
/**end */
