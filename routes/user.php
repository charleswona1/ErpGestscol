<?php

use App\Models\document;
use App\Models\entete;
use App\Models\etablissement;
use App\Models\parametrage_matricule;
use App\Models\profil;
use App\Models\signature;
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

    Route::get('/configuration/dashboard', [App\Http\Controllers\ConfigurationController::class, 'getDashboard'])->name('user.dashboard')->middleware('authUser');


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
    $matricule = parametrage_matricule::where('id_etablissement', Session::get('idEtabl'))->first();
    return view('configuration.content.etablissement.matricule', compact('matricule'));
})->middleware('authUser');;

Route::get('/configuration/editMatricule/{id}', [App\Http\Controllers\EtablissementController::class, 'editMatricule'])->name('users.edit_matricule')->middleware('authUser');
Route::post('/configuration/addMatricule', [App\Http\Controllers\EtablissementController::class, 'addMatricule'])->name('users.add_matricule')->middleware('authUser');

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
})->middleware('authUser');

Route::get('/configuration/documentation/documents/{id}', [App\Http\Controllers\DocumentController::class, 'getDocument'])->middleware('authUser');

Route::post('/configuration/addDocument', [App\Http\Controllers\DocumentController::class, 'addDocument'])->name('document.ajout')->middleware('authUser');

Route::get('/configuration/documentation/deleteDocument/{id}',  [App\Http\Controllers\DocumentController::class, 'deleteDocument'])->name('delete.docu')->middleware('authUser');
Route::get('/configuration/documentation/editDocuments', function () {
    return view('configuration.content.documentations.editDocument');
})->middleware('authUser');

Route::get('/configuration/documentation/entete', function () {
    $entete = entete::where('id_etablissement', Session::get('idEtabl'))->first();
    $et = etablissement::find(Session::get('idEtabl'));
    $logo = $et->logo;
    if($entete == null){
        $entete = entete::create([
            "id_etablissement" => Session::get('idEtabl'),
            "eng_gauche" => "/__/__/__/",
            "eng_droit" => "/__/__/__/",
        ]);
    }
    return view('configuration.content.documentations.entete', compact("entete", "logo"));
})->middleware('authUser');

Route::get('/configuration/documentation/editEntete/{id}', [App\Http\Controllers\DocumentController::class, 'editEntete'])->name('users.edit_entete')->middleware('authUser');

Route::post('/configuration/documentation/modifEntete', [App\Http\Controllers\DocumentController::class, 'modifEntete'])->name('users.modifEntete')->middleware('authUser');

Route::get('/configuration/documentation/signature', function () {
    $document = signature::where('id_etablissement', Session::get('idEtabl'))->first();

    return view('configuration.content.documentations.signature', compact('document'));
})->middleware('authUser');

Route::get('/configuration/documentation/editSignature/{id}', [App\Http\Controllers\DocumentController::class, 'editSignature'])->name('users.edit_signature')->middleware('authUser');
Route::post('/configuration/documentation/addSignature', [App\Http\Controllers\DocumentController::class, 'addSignature'])->name('users.addSignature')->middleware('authUser');
/**end */

/**other menu */
Route::get('/configuration/annee', [App\Http\Controllers\AnneeScolaireController::class, 'annee_scolaire'])->name('users.annee_scolaire')->middleware('authUser');
Route::post('/configuration/delete_annee', [App\Http\Controllers\AnneeScolaireController::class, 'delete_annee_scolaire'])->name('users.delete_annee_scolaire')->middleware('authUser');
Route::post('/configuration/ajout_annee', [App\Http\Controllers\AnneeScolaireController::class, 'ajout_annee'])->name('users.ajout_annee')->middleware('authUser');
Route::post('/configuration/encour_annee', [App\Http\Controllers\AnneeScolaireController::class, 'encour_annee'])->name('users.encour_annee')->middleware('authUser');
Route::post('/configuration/verrouiller_annee', [App\Http\Controllers\AnneeScolaireController::class, 'verrouiller_annee'])->name('users.verrouiller_annee')->middleware('authUser');


/** Periode */

Route::get('/configuration/periode', [App\Http\Controllers\AnneeScolaireController::class, 'getPeriode'])->name('users.periode')->middleware('authUser');
Route::get('/configuration/editDenomination/annee', [App\Http\Controllers\AnneeScolaireController::class, 'modifDenominationAnnee'])->name('users.modifDenominationAnnee')->middleware('authUser');
Route::get('/configuration/editDenomination/periode', [App\Http\Controllers\AnneeScolaireController::class, 'modifDenominationPeriode'])->name('users.modifDenominationPeriode')->middleware('authUser');
Route::get('/configuration/editDenomination/sous_periode', [App\Http\Controllers\AnneeScolaireController::class, 'modifDenominationSousPeriode'])->name('users.modifDenominationSousPeriode')->middleware('authUser');
Route::post('/configuration/editDenomination/save_denomination', [App\Http\Controllers\AnneeScolaireController::class, 'save_denomination'])->name('users.save_denomination')->middleware('authUser');

/** end  */

/** ressource profil */
Route::get('/configuration/module', [App\Http\Controllers\AnneeScolaireController::class, 'getRessourceGroupe'])->name('users.getRessourceGroupe')->middleware('authUser');
Route::post('/configuration/save_ressource_profil', [App\Http\Controllers\AnneeScolaireController::class, 'save_ressource_profil'])->name('users.save_ressource_profil')->middleware('authUser');
Route::post('/configuration/add_ressource_profil', [App\Http\Controllers\AnneeScolaireController::class, 'add_ressource_profil'])->name('users.add_ressource_profil')->middleware('authUser');
Route::post('/configuration/delete_ressource_profil', [App\Http\Controllers\AnneeScolaireController::class, 'delete_ressource_profil'])->name('users.delete_ressource_profil')->middleware('authUser');
/** end */

?>
