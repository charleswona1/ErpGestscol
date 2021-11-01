<?php
    use Illuminate\Support\Facades\Route;


    Route::prefix('gestscol')->middleware([])->group(function(){
        Route::get('/dashboard', 'HomeController@homeGestscol')->name('gestscol.home');

         /** apprenant route */
   
        Route::get('/liste_apprenant', 'EleveController@liste_apprenant')->name('gestscol.list_apprenant');
        Route::get('/creer_apprenant', 'EleveController@creer_apprenant')->name('gestscol.creer_apprenant');
        Route::get('/classe_apprenant', 'EleveController@classe_apprenant')->name('gestscol.classe_apprenant');
        Route::post('/ajouter_apprenant', 'EleveController@ajouter_apprenant')->name('gestscol.ajouter_apprenant');
        Route::post('/list_apprenant_class', 'EleveController@apprenantClasse')->name('gestscol.apprenantparclasse');
        Route::post('/affectation', 'EleveController@affectation')->name('gestscol.affectation');
    
        /** end */

        /** enseignant route */
        Route::get('/liste_enseignant', 'EnseignantController@liste_enseignant')->name('gestscol.list_enseignant');
        Route::get('/creer_enseignant', 'EnseignantController@creer_enseignant')->name('gestscol.creer_enseignant');
        Route::get('/emploi_enseignant', 'EnseignantController@emploi_enseignant')->name('gestscol.emploi_enseignant');
        Route::post('/ajouter_enseignant', 'EnseignantController@ajouter_enseignant')->name('gestscol.ajouter_enseignant');
        Route::get('/delete', 'EnseignantController@delete')->name('gestscol.delete');
        /** end */

        /** classe route */
        Route::get('/liste_classe', 'ClasseController@liste_classe')->name('gestscol.list_classe');
        Route::get('/formulaire_classe', 'ClasseController@formulaire_classe')->name('gestscol.formulaire_classe');
        //Route::get('/emploi_enseignant', 'ClasseController@emploi_enseignant')->name('gestscol.emploi_enseignant');
        /** end */

        /** matiere route */
        Route::get('/liste_matiere', 'MatiereController@liste_matiere')->name('gestscol.list_matiere');
        Route::get('/creer_matiere', 'MatiereController@creer_matiere')->name('gestscol.creer_matiere');
        Route::get('/groupe_matiere', 'MatiereController@groupe_matiere')->name('gestscol.groupe_matiere');

        Route::prefix('/parametrage_matiere')->group(function(){
            Route::get('/', 'ParametrageMatiereController@parametrage_matiere')->name('gestscol.parametrage_matiere');
            Route::post('/create', 'ParametrageMatiereController@create')->name('gestscol.parametrage_matiere.create');
            Route::get('/edit/{id}', 'ParametrageMatiereController@edit')->name('gestscol.parametrage_matiere.edit');
            Route::post('/update', 'ParametrageMatiereController@update')->name('gestscol.parametrage_matiere.update');
            Route::get('/delete/{id}', 'ParametrageMatiereController@delete')->name('gestscol.parametrage_matiere.delete');
        });
        Route::get('/configuration/affectation/matiere', 'ParametrageMatiereController@affectation')->name('gestscol.affectation_matiere');
       
        /** end */

        /** cycle route */
    
        Route::get('/liste_cycle', 'CycleController@liste_cycle')->name('gestscol.list_cycle');
        Route::get('/formulaire_cycle', 'CycleController@formulaire_cycle')->name('gestscol.formulaire_cycle');
        Route::post('/creer_cycle', 'CycleController@creer_cycle')->name('gestscol.creer_cycle');
        //Route::get('/emploi_enseignant', 'ClasseController@emploi_enseignant'])->name('gestscol.emploi_enseignant');
    
        /** end */

        /** cycle route */
    
        Route::get('/liste_cycle', 'CycleController@liste_cycle')->name('gestscol.list_cycle');
        Route::get('/formulaire_cycle', 'CycleController@formulaire_cycle')->name('gestscol.formulaire_cycle');
        Route::post('/creer_cycle', 'CycleController@creer_cycle')->name('gestscol.creer_cycle');
        //Route::get('/emploi_enseignant', 'ClasseController@emploi_enseignant'])->name('gestscol.emploi_enseignant');
    
        /** end */

        /** niveau route */
    
        Route::get('/liste_niveau', 'NiveauController@liste_niveau')->name('gestscol.list_niveau');
        Route::get('/formulaire_niveau', 'NiveauController@formulaire_niveau')->name('gestscol.formulaire_niveau');
        Route::post('/creer_niveau', 'NiveauController@creer_niveau')->name('gestscol.creer_niveau');
        //Route::get('/emploi_enseignant', 'ClasseController@emploi_enseignant')->name('gestscol.emploi_enseignant');
    
        /** end */

        /** periode route */
    
        Route::get('/liste_periode', 'PeriodeController@liste_periode')->name('gestscol.list_periode');
        Route::get('/formulaire_periode', 'PeriodeController@formulaire_periode')->name('gestscol.formulaire_periode');
        //Route::get('/emploi_enseignant', 'ClasseController@emploi_enseignant')->name('gestscol.emploi_enseignant');
    
        /** end */

        /** sous-periode route */
    
        Route::get('/liste_sous_periode', 'SousPeriodeController@liste_sous_periode')->name('gestscol.list_sous_periode');
        Route::get('/formulaire_sous_periode', 'SousPeriodeController@formulaire_sous_periode')->name('gestscol.formulaire_sous_periode');
        //Route::get('/emploi_enseignant', 'ClasseController@emploi_enseignant')->name('gestscol.emploi_enseignant');
    
        /** end */

        /** evaluation route */
    
        Route::get('/liste_evaluation', 'EvaluationController@liste_evaluation')->name('gestscol.list_evaluation');
        Route::get('/formulaire_evaluation', 'EvaluationController@formulaire_evaluation')->name('gestscol.formulaire_evaluation');
        //Route::get('/emploi_enseignant', 'ClasseController@emploi_enseignant')->name('gestscol.emploi_enseignant');
    
        /** end */

       /** sanction route */
       
        Route::get('/liste_sanction', 'SanctionController@liste_sanction')->name('gestscol.liste_sanction');
        Route::get('/formulaire_sanction', 'SanctionController@formulaire_sanction')->name('gestscol.formulaire_sanction');

        Route::prefix('/sanction')->group(function(){
            Route::post('/create', 'SanctionController@create')->name('gestscol.sanction.create');
            Route::get('/formulaire_sanction/{id}', 'SanctionController@formulaire_sanction_update')->name('gestscol.formulaire_sanction.update');
            Route::post('/update', 'SanctionController@update')->name('gestscol.sanction.update');
            Route::get('/delete/{id}', 'SanctionController@delete')->name('gestscol.sanction.delete');
            
            Route::get('/parametrage/edit/{id}', 'SanctionController@parametrage_edit')->name('gestscol.sanction.parametrage.edit');
            Route::get('/parametrage', 'SanctionController@parametrage')->name('gestscol.sanction.parametrage');
            Route::post('/parametrage', 'SanctionController@parametrage_create')->name('gestscol.sanction.parametrage.create');
            Route::post('/parametrage/update', 'SanctionController@parametrage_update')->name('gestscol.sanction.parametrage.update');
            Route::get('/parametrage/delete/{id}', 'SanctionController@parametrage_delete')->name('gestscol.sanction.parametrage.delete');
        });
        /** end */

        Route::get('/matricule', 'EtablissementController@matricule_etablissement')->name('gestscol.matricule_etablissement');
    });
    /** dashboard */
   
    /** end */
    

    

    
   


?>
