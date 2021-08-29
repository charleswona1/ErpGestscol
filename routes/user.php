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

Route::get('/configuration/periode', function () {
    return view('configuration.content.etablissement.periode');
});

Route::get('/configuration/editPeriode', function () {
    return view('configuration.content.etablissement.editPeriode');
});
/**end */

/**Utilisateur */
Route::get('/configuration/utilisateur/profilU', function () {
    $users = etablissement::find(Session::get('idEtabl'))->users()->select('id_profil', 'nom', 'login', 'creation_date', 'enabled', 'telephone', 'users.id_user')->get();
    $resultat = array();
    foreach ($users as $user) {
        $res = array();
        $profil = profil::find($user->id_profil);
        $res['nom'] = $user->nom;
        $res['login'] = $user->login;
        $res['date'] = $user->creation_date;
        $res['enable'] = $user->enabled;
        $res['telephone'] = $user->telephone;
        $res['groupe'] = $profil->libelle;

        $resultat[] = $res;
    }
    return view('configuration.content.utilisateurs.profil', $data = ["users" => $resultat]);
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
});
/**end */
