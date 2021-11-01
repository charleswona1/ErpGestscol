<?php
    use Illuminate\Support\Facades\Route;


    Route::prefix('gestscol')->middleware([])->group(function(){
        Route::get('/dashboard', 'HomeController@homeGestscol')->name('gestscol.home');

    /** enseignant route */
  /*  Route::middleware([])->group(function () {
        Route::get('/gestscol/liste_enseignant', [App\Http\Controllers\EnseignantController::class, 'liste_enseignant'])->name('gestscol.list_enseignant');
        Route::get('/gestscol/creer_enseignant', [App\Http\Controllers\EnseignantController::class, 'creer_enseignant'])->name('gestscol.creer_enseignant');
        Route::get('/gestscol/emploi_enseignant', [App\Http\Controllers\EnseignantController::class, 'emploi_enseignant'])->name('gestscol.emploi_enseignant');
        Route::post('/gestscol/ajouter_enseignant', [App\Http\Controllers\EnseignantController::class, 'ajouter_enseignant'])->name('gestscol.ajouter_enseignant');
    });*/
    /** end */

    /** classe route */
    Route::middleware([])->group(function () {
        Route::get('/gestscol/liste_classe', [App\Http\Controllers\ClasseController::class, 'index'])->name('gestscol.list_classe');
        Route::get('/gestscol/formulaire_classe', [App\Http\Controllers\ClasseController::class, 'create'])->name('gestscol.classe.create');
        Route::post('/gestscol/formulaire_classe/create', [App\Http\Controllers\ClasseController::class, 'store'])->name('gestscol.classe.store');
        Route::get('/gestscol/formulaire_classe/edit/{id}', [App\Http\Controllers\ClasseController::class, 'edit'])->name('gestscol.classe.edit');
        Route::post('/gestscol/formulaire_classe/update', [App\Http\Controllers\ClasseController::class, 'update'])->name('gestscol.classe.update');
        
        Route::get('/gestscol/formulaire_classe/delete/{id}', [App\Http\Controllers\ClasseController::class, 'destroy'])->name('gestscol.classe.delete');
        
        //Route::get('/gestscol/emploi_enseignant', [App\Http\Controllers\ClasseController::class, 'emploi_enseignant'])->name('gestscol.emploi_enseignant');
    });
    /** end */

    /** matiere route */
    Route::middleware([])->group(function () {
        Route::get('/gestscol/liste_matiere', [App\Http\Controllers\MatiereController::class, 'liste_matiere'])->name('gestscol.list_matiere');
        Route::get('/gestscol/creer_matiere', [App\Http\Controllers\MatiereController::class, 'creer_matiere'])->name('gestscol.creer_matiere');
        Route::post('/gestscol/creer_matiere/store', [App\Http\Controllers\MatiereController::class, 'store'])->name('gestscol.matiere.store');
        Route::get('/gestscol/edit_matiere/{id}', [App\Http\Controllers\MatiereController::class, 'edit'])->name('gestscol.matiere.edit');
        Route::get('/gestscol/delete_matiere/{id}', [App\Http\Controllers\MatiereController::class, 'destroy'])->name('gestscol.matiere.delete');
        
        Route::post('/gestscol/creer_matiere/update', [App\Http\Controllers\MatiereController::class, 'update'])->name('gestscol.matiere.update');
        

        Route::get('/gestscol/parametrage_matiere', [App\Http\Controllers\ParametrageMatiereController::class, 'parametrage_matiere'])->name('gestscol.parametrage_matiere');
        Route::post('/gestscol/parametrage_matiere/create', [App\Http\Controllers\ParametrageMatiereController::class, 'create'])->name('gestscol.parametrage_matiere.create');

        Route::get('/gestscol/parametrage_matiere/edit/{id}', [App\Http\Controllers\ParametrageMatiereController::class, 'edit'])->name('gestscol.parametrage_matiere.edit');
        Route::post('/gestscol/parametrage_matiere/update', [App\Http\Controllers\ParametrageMatiereController::class, 'update'])->name('gestscol.parametrage_matiere.update');
        Route::get('/gestscol/parametrage_matiere/delete/{id}', [App\Http\Controllers\ParametrageMatiereController::class, 'delete'])->name('gestscol.parametrage_matiere.delete');
        
        Route::get('/gestscol/configuration/affectation/matiere', [App\Http\Controllers\ParametrageMatiereController::class, 'affectation'])->name('gestscol.affectation_matiere');
        
        //Route::get('/gestscol/emploi_enseignant', [App\Http\Controllers\ClasseController::class, 'emploi_enseignant'])->name('gestscol.emploi_enseignant');
    });
    Route::get('/gestscol/groupe_matiere', [App\Http\Controllers\GroupeMatiereController::class, 'index'])->name('gestscol.groupe_matiere.index');
    Route::post('/gestscol/groupe_matiere/create', [App\Http\Controllers\GroupeMatiereController::class, 'store'])->name('gestscol.groupe_matiere.store');
    Route::get('/gestscol/groupe_matiere/edit/{id}', [App\Http\Controllers\GroupeMatiereController::class, 'edit'])->name('gestscol.groupe_matiere.edit');
    Route::post('/gestscol/groupe_matiere/update', [App\Http\Controllers\GroupeMatiereController::class, 'update'])->name('gestscol.groupe_matiere.update');
    
    Route::get('/gestscol/groupe_matiere/delete/{id}', [App\Http\Controllers\GroupeMatiereController::class, 'destroy'])->name('gestscol.groupe_matiere.delete');
    
    /** end */

    /** cycle route */
    Route::middleware([])->group(function () {
        Route::get('/gestscol/liste_cycle', [App\Http\Controllers\CycleController::class, 'liste_cycle'])->name('gestscol.list_cycle');
        Route::get('/gestscol/formulaire_cycle', [App\Http\Controllers\CycleController::class, 'formulaire_cycle'])->name('gestscol.formulaire_cycle');
        Route::post('/gestscol/creer_cycle', [App\Http\Controllers\CycleController::class, 'creer_cycle'])->name('gestscol.creer_cycle');
        Route::get('/gestscol/edit_cycle/{id}', [App\Http\Controllers\CycleController::class, 'edit'])->name('gestscol.edit_cycle');
        Route::post('/gestscol/edit_cycle/', [App\Http\Controllers\CycleController::class, 'update'])->name('gestscol.update_cycle');
        Route::get('/gestscol/delete_cycle/{id}', [App\Http\Controllers\CycleController::class, 'destroy'])->name('gestscol.delete_cycle');
        
        //Route::get('/gestscol/emploi_enseignant', [App\Http\Controllers\ClasseController::class, 'emploi_enseignant'])->name('gestscol.emploi_enseignant');
    });
    /** end */

    /** niveau route */
    Route::middleware([])->group(function () {
        Route::get('/gestscol/liste_niveau', [App\Http\Controllers\NiveauController::class, 'liste_niveau'])->name('gestscol.list_niveau');
        Route::get('/gestscol/formulaire_niveau', [App\Http\Controllers\NiveauController::class, 'formulaire_niveau'])->name('gestscol.formulaire_niveau');
        Route::post('/gestscol/creer_niveau/', [App\Http\Controllers\NiveauController::class, 'creer_niveau'])->name('gestscol.creer_niveau');
        
        Route::get('/gestscol/formulaire_niveau/edit/{id}', [App\Http\Controllers\NiveauController::class, 'edit'])->name('gestscol.formulaire_niveau.edit');
        Route::post('/gestscol/edit_niveau/', [App\Http\Controllers\NiveauController::class, 'update'])->name('gestscol.edit_niveau');
        Route::get('/gestscol/delete_niveau/{id}', [App\Http\Controllers\NiveauController::class, 'destroy'])->name('gestscol.delete_niveau');
        
        //Route::get('/gestscol/emploi_enseignant', [App\Http\Controllers\ClasseController::class, 'emploi_enseignant'])->name('gestscol.emploi_enseignant');
    });
    /** end */

    /** periode route */
    Route::middleware([])->group(function () {
        Route::get('/gestscol/liste_periode', [App\Http\Controllers\PeriodeController::class, 'liste_periode'])->name('gestscol.list_periode');
        Route::get('/gestscol/formulaire_periode', [App\Http\Controllers\PeriodeController::class, 'formulaire_periode'])->name('gestscol.formulaire_periode');
        Route::post('/gestscol/formulaire_periode', [App\Http\Controllers\PeriodeController::class, 'create'])->name('gestscol.formulaire_periode.create');
        
        Route::get('/gestscol/formulaire_periode/edit/{id}', [App\Http\Controllers\PeriodeController::class, 'edit'])->name('gestscol.formulaire_periode.edit');
        Route::post('/gestscol/formulaire_periode/update', [App\Http\Controllers\PeriodeController::class, 'update'])->name('gestscol.formulaire_periode.update');
        Route::get('/gestscol/delete_periode/{id}', [App\Http\Controllers\PeriodeController::class, 'destroy'])->name('gestscol.delete_periode');
        
        
        //Route::get('/gestscol/emploi_enseignant', [App\Http\Controllers\ClasseController::class, 'emploi_enseignant'])->name('gestscol.emploi_enseignant');
    });
    /** end */
         /** apprenant route */
   
        Route::get('/liste_apprenant', 'EleveController@liste_apprenant')->name('gestscol.list_apprenant');
        Route::get('/creer_apprenant', 'EleveController@creer_apprenant')->name('gestscol.creer_apprenant');
        Route::get('/classe_apprenant', 'EleveController@classe_apprenant')->name('gestscol.classe_apprenant');
        Route::post('/ajouter_apprenant', 'EleveController@ajouter_apprenant')->name('gestscol.ajouter_apprenant');
    
        /** end */

        /** enseignant route */
        Route::get('/liste_enseignant', 'EnseignantController@liste_enseignant')->name('gestscol.list_enseignant');
        Route::get('/creer_enseignant', 'EnseignantController@creer_enseignant')->name('gestscol.creer_enseignant');
        Route::get('/emploi_enseignant', 'EnseignantController@emploi_enseignant')->name('gestscol.emploi_enseignant');
        Route::post('/ajouter_enseignant', 'EnseignantController@ajouter_enseignant')->name('gestscol.ajouter_enseignant');
        Route::get('/delete', 'EnseignantController@delete')->name('gestscol.delete');
        /** end */

        /** classe route */
       /* Route::get('/liste_classe', 'ClasseController@liste_classe')->name('gestscol.list_classe');
        Route::get('/formulaire_classe', 'ClasseController@formulaire_classe')->name('gestscol.formulaire_classe');*/
        //Route::get('/emploi_enseignant', 'ClasseController@emploi_enseignant')->name('gestscol.emploi_enseignant');
        /** end */

        /** matiere route */
       /* Route::get('/liste_matiere', 'MatiereController@liste_matiere')->name('gestscol.list_matiere');
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
    
      /*  Route::get('/liste_cycle', 'CycleController@liste_cycle')->name('gestscol.list_cycle');
        Route::get('/formulaire_cycle', 'CycleController@formulaire_cycle')->name('gestscol.formulaire_cycle');
        Route::post('/creer_cycle', 'CycleController@creer_cycle')->name('gestscol.creer_cycle');
        //Route::get('/emploi_enseignant', 'ClasseController@emploi_enseignant'])->name('gestscol.emploi_enseignant');
    
        /** end */

        /** cycle route */
    
     /*   Route::get('/liste_cycle', 'CycleController@liste_cycle')->name('gestscol.list_cycle');
        Route::get('/formulaire_cycle', 'CycleController@formulaire_cycle')->name('gestscol.formulaire_cycle');
        Route::post('/creer_cycle', 'CycleController@creer_cycle')->name('gestscol.creer_cycle');
        //Route::get('/emploi_enseignant', 'ClasseController@emploi_enseignant'])->name('gestscol.emploi_enseignant');
    
        /** end */

        /** niveau route */
    
      /*  Route::get('/liste_niveau', 'NiveauController@liste_niveau')->name('gestscol.list_niveau');
        Route::get('/formulaire_niveau', 'NiveauController@formulaire_niveau')->name('gestscol.formulaire_niveau');
        Route::post('/creer_niveau', 'NiveauController@creer_niveau')->name('gestscol.creer_niveau');
        //Route::get('/emploi_enseignant', 'ClasseController@emploi_enseignant')->name('gestscol.emploi_enseignant');
    
        /** end */

        /** periode route */
    
     /*   Route::get('/liste_periode', 'PeriodeController@liste_periode')->name('gestscol.list_periode');
        Route::get('/formulaire_periode', 'PeriodeController@formulaire_periode')->name('gestscol.formulaire_periode');
        //Route::get('/emploi_enseignant', 'ClasseController@emploi_enseignant')->name('gestscol.emploi_enseignant');
    
        /** end */

        /** sous-periode route */
        Route::middleware([])->group(function () {
        
        Route::get('/liste_sous_periode', 'SousPeriodeController@liste_sous_periode')->name('gestscol.list_sous_periode');
        Route::get('/formulaire_sous_periode', 'SousPeriodeController@formulaire_sous_periode')->name('gestscol.formulaire_sous_periode');
        //Route::post('/formulaire_sous_periode/create', 'SousPeriodeController@create')->name('gestscol.formulaire_sous_periode.create');
        Route::post('/formulaire_sous_periode', [App\Http\Controllers\SousPeriodeController::class, 'create'])->name('gestscol.formulaire_sous_periode.create');
    
        Route::get('/formulaire_sous_periode/edit/{id}', [App\Http\Controllers\SousPeriodeController::class, 'edit'])->name('gestscol.formulaire_sous_periode.edit');
        Route::post('/formulaire_sous_periode/edit', [App\Http\Controllers\SousPeriodeController::class, 'update'])->name('gestscol.formulaire_sous_periode.update');
        
        Route::get('/formulaire_sous_periode/delete/{id}', [App\Http\Controllers\SousPeriodeController::class, 'destroy'])->name('gestscol.formulaire_sous_periode.delete');
    
    });
        //Route::get('/emploi_enseignant', 'ClasseController@emploi_enseignant')->name('gestscol.emploi_enseignant');
    
        /** end */

        /** evaluation route */
    
        Route::get('/liste_evaluation', 'EvaluationController@liste_evaluation')->name('gestscol.list_evaluation');
        Route::get('/formulaire_evaluation', 'EvaluationController@formulaire_evaluation')->name('gestscol.formulaire_evaluation');
        Route::post('/formulaire_evaluation', 'EvaluationController@store')->name('gestscol.formulaire_evaluation.create');
        Route::get('/formulaire_evaluation/edit/{id}', 'EvaluationController@edit')->name('gestscol.formulaire_evaluation.edit');
        Route::post('/formulaire_evaluation/edit', 'EvaluationController@update')->name('gestscol.formulaire_evaluation.update');
        Route::get('/formulaire_evaluation/delete/{id}', 'EvaluationController@destroy')->name('gestscol.formulaire_evaluation.delete');
        
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
