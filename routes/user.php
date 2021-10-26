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


Route::prefix('/configuration')->group(function(){
    Route::get('/', 'ConfigurationController@userLogin1')->name('user.login');

    Route::post('/', 'ConfigurationController@userLogin')->name('user.authentification');

    Route::middleware('authUser')->group(function(){
        Route::get('/home/{id}', 'ConfigurationController@configurationHome')->name('user.home');
        Route::get('/dashboard', 'ConfigurationController@getDashboard')->name('user.dashboard');
        Route::get('/profilE', 'EtablissementController@profilEtablissement');
        Route::get('/showProfil', 'EtablissementController@showEtablissementProfil')->name('show_etablissement');
        Route::post('/modifierProfil', 'EtablissementController@editEtablissementProfil');
        Route::get('/editMatricule/{id}', 'EtablissementController@editMatricule')->name('users.edit_matricule');
        Route::post('/addMatricule', 'EtablissementController@addMatricule')->name('users.add_matricule');

        Route::prefix('/utilisateur')->group(function(){
            Route::get('/profilU', 'ConfigurationController@profilUser')->name('users.profil');
            Route::get('/modif_profil/{id}', 'ConfigurationController@modif_profil')->name('users.modif_profil');
            Route::get('/voir_profil/{id}', 'ConfigurationController@voir_profil')->name('users.voir_profil');
            Route::post('/modif_user', 'ConfigurationController@modif_user')->name('user.modif');
            Route::post('/supprimer_user', 'ConfigurationController@delete_user')->name('user.delete');
            Route::post('/force_supprimer_user', 'ConfigurationController@force_delete_user')->name('user.delete_force');

            /** Utilisateur groupe */
            Route::get('/groupe', 'ConfigurationController@groupeUser')->name('users.groupe');
            Route::get('/voir_groupe/{id}', 'ConfigurationController@voir_groupe')->name('users.voir_groupe');
            Route::get('/edit_groupe/{id}', 'ConfigurationController@edit_groupe')->name('users.edit_groupe');
            Route::post('/modif_groupe', 'ConfigurationController@modif_groupe')->name('users.modif_groupe');
            Route::post('/supprimer_groupe', 'ConfigurationController@supprimer_groupe')->name('users.supprimer_groupe');
            Route::post('/save_groupe', 'ConfigurationController@save_groupe')->name('users.save_groupe');
            Route::get('/parametrage', 'ConfigurationController@groupeParametrage')->name('users.groupeParam');
            Route::get('/editParametrage/{id}', 'ConfigurationController@groupeIdParametrage')->name('users.groupeIdParam');
            Route::post('/modif_parametre', 'ConfigurationController@modif_parametre')->name('users.modif_parametre');
            /** end */
        });

        Route::get('/matricule', function () {
            $matricule = parametrage_matricule::where('id_etablissement', Session::get('idEtabl'))->first();
            return view('configuration.content.etablissement.matricule', compact('matricule'));
        })->middleware('authUser');;
        /**end */
        
        /** Documentations */
        Route::prefix('/documentation')->group(function(){
            Route::get('/documents', function () {
                return view('configuration.content.documentations.document');
            });
            Route::get('/documents/{id}', 'DocumentController@getDocument');

            Route::get('/deleteDocument/{id}',  'DocumentController@deleteDocument')->name('delete.docu');
            Route::get('/editDocuments', function () {
                return view('configuration.content.documentations.editDocument');
            });

            Route::get('/entete', function () {
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
            });

            Route::get('/editEntete/{id}', 'DocumentController@editEntete')->name('users.edit_entete');

            Route::post('/modifEntete', 'DocumentController@modifEntete')->name('users.modifEntete');

            Route::get('/signature', function () {
                $document = signature::where('id_etablissement', Session::get('idEtabl'))->first();

                return view('configuration.content.documentations.signature', compact('document'));
            });

            Route::get('/editSignature/{id}', 'DocumentController@editSignature')->name('users.edit_signature');
            Route::post('/addSignature', 'DocumentController@addSignature')->name('users.addSignature');
                    });
       
        Route::post('/addDocument', 'DocumentController@addDocument')->name('document.ajout');

    });
    
});
	
Route::prefix('/user')->group(function(){
    Route::post('/register', 'ConfigurationController@userRegister')->name('user.register')->middleware('authUser');

	Route::post('/logout', 'ConfigurationController@userLogout')->name('user.logout');
});

/**Etablissement */
// Route::get('/configuration/profilE', function () {
// 	$etablissement = etablissement::find(Session::get('idEtabl'));
// 	$modules = $etablissement->modules;
//     return view('configuration.content.etablissement.profil', $data = ['etablissement'=>$etablissement, 'modules'=>$modules]);
// });






/**end */

/**other menu */
Route::get('/configuration/annee', 'AnneeScolaireController@annee_scolaire')->name('users.annee_scolaire')->middleware('authUser');
Route::post('/configuration/delete_annee', 'AnneeScolaireController@delete_annee_scolaire')->name('users.delete_annee_scolaire')->middleware('authUser');
Route::post('/configuration/ajout_annee', 'AnneeScolaireController@ajout_annee')->name('users.ajout_annee')->middleware('authUser');
Route::post('/configuration/encour_annee', 'AnneeScolaireController@encour_annee')->name('users.encour_annee')->middleware('authUser');
Route::post('/configuration/verrouiller_annee', 'AnneeScolaireController@verrouiller_annee')->name('users.verrouiller_annee')->middleware('authUser');


/** Periode */

Route::get('/configuration/periode', 'AnneeScolaireController@getPeriode')->name('users.periode')->middleware('authUser');
Route::get('/configuration/editDenomination/annee', 'AnneeScolaireController@modifDenominationAnnee')->name('users.modifDenominationAnnee')->middleware('authUser');
Route::get('/configuration/editDenomination/periode', 'AnneeScolaireController@modifDenominationPeriode')->name('users.modifDenominationPeriode')->middleware('authUser');
Route::get('/configuration/editDenomination/sous_periode', 'AnneeScolaireController@modifDenominationSousPeriode')->name('users.modifDenominationSousPeriode')->middleware('authUser');
Route::post('/configuration/editDenomination/save_denomination', 'AnneeScolaireController@save_denomination')->name('users.save_denomination')->middleware('authUser');

/** end  */

/** ressource profil */
Route::get('/configuration/module', 'AnneeScolaireController@getRessourceGroupe')->name('users.getRessourceGroupe')->middleware('authUser');
Route::post('/configuration/save_ressource_profil', 'AnneeScolaireController@save_ressource_profil')->name('users.save_ressource_profil')->middleware('authUser');
Route::post('/configuration/add_ressource_profil', 'AnneeScolaireController@add_ressource_profil')->name('users.add_ressource_profil')->middleware('authUser');
Route::post('/configuration/delete_ressource_profil', 'AnneeScolaireController@delete_ressource_profil')->name('users.delete_ressource_profil')->middleware('authUser');
/** end */

?>
