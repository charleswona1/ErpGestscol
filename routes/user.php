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

/**Etablissement */
Route::get('/configuration/profilE', function () {
	$etablissement = etablissement::find(Session::get('idEtabl'));
	$modules = $etablissement->modules;
    return view('configuration.content.etablissement.profil', $data = ['etablissement'=>$etablissement, 'modules'=>$modules]);
});

Route::get('/configuration/matricule', function () {
    return view('configuration.content.etablissement.matricule');
});

Route::get('/configuration/editMatricule', function () {
    return view('configuration.content.etablissement.editMatricule');
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
/**end */

/** Documentations */
Route::get('/configuration/documentation/documents', function () {
    return view('configuration.content.documentations.document');
});
/**end */
