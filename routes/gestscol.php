<?php
    use Illuminate\Support\Facades\Route;

    /** dashboard */
    Route::get('/gestscol/dashboard', [App\Http\Controllers\HomeController::class, 'homeGestscol'])->name('gestscol.home');
    /** end */

    /** apprenant route */
    Route::middleware([])->group(function () {
        Route::get('/gestscol/liste_apprenant', [App\Http\Controllers\EleveController::class, 'liste_apprenant'])->name('gestscol.list_apprenant');
        Route::get('/gestscol/creer_apprenant', [App\Http\Controllers\EleveController::class, 'creer_apprenant'])->name('gestscol.creer_apprenant');
        Route::get('/gestscol/classe_apprenant', [App\Http\Controllers\EleveController::class, 'classe_apprenant'])->name('gestscol.classe_apprenant');
        Route::post('/gestscol/ajouter_apprenant', [App\Http\Controllers\EleveController::class, 'ajouter_apprenant'])->name('gestscol.ajouter_apprenant');
    });
    /** end */

    /** enseignant route */
    Route::middleware([])->group(function () {
        Route::get('/gestscol/liste_enseignant', [App\Http\Controllers\EnseignantController::class, 'liste_enseignant'])->name('gestscol.list_enseignant');
        Route::get('/gestscol/creer_enseignant', [App\Http\Controllers\EnseignantController::class, 'creer_enseignant'])->name('gestscol.creer_enseignant');
        Route::get('/gestscol/emploi_enseignant', [App\Http\Controllers\EnseignantController::class, 'emploi_enseignant'])->name('gestscol.emploi_enseignant');
        Route::post('/gestscol/ajouter_enseignant', [App\Http\Controllers\EnseignantController::class, 'ajouter_enseignant'])->name('gestscol.ajouter_enseignant');
    });
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
        
        Route::get('/gestscol/groupe_matiere', [App\Http\Controllers\MatiereController::class, 'groupe_matiere'])->name('gestscol.groupe_matiere');

        Route::get('/gestscol/parametrage_matiere', [App\Http\Controllers\ParametrageMatiereController::class, 'parametrage_matiere'])->name('gestscol.parametrage_matiere');
        Route::post('/gestscol/parametrage_matiere/create', [App\Http\Controllers\ParametrageMatiereController::class, 'create'])->name('gestscol.parametrage_matiere.create');

        Route::get('/gestscol/parametrage_matiere/edit/{id}', [App\Http\Controllers\ParametrageMatiereController::class, 'edit'])->name('gestscol.parametrage_matiere.edit');
        Route::post('/gestscol/parametrage_matiere/update', [App\Http\Controllers\ParametrageMatiereController::class, 'update'])->name('gestscol.parametrage_matiere.update');
        Route::get('/gestscol/parametrage_matiere/delete/{id}', [App\Http\Controllers\ParametrageMatiereController::class, 'delete'])->name('gestscol.parametrage_matiere.delete');
        
        Route::get('/gestscol/configuration/affectation/matiere', [App\Http\Controllers\ParametrageMatiereController::class, 'affectation'])->name('gestscol.affectation_matiere');
        
        //Route::get('/gestscol/emploi_enseignant', [App\Http\Controllers\ClasseController::class, 'emploi_enseignant'])->name('gestscol.emploi_enseignant');
    });
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

    /** sous-periode route */
    Route::middleware([])->group(function () {
        Route::get('/gestscol/liste_sous_periode', [App\Http\Controllers\SousPeriodeController::class, 'liste_sous_periode'])->name('gestscol.list_sous_periode');
        Route::get('/gestscol/formulaire_sous_periode', [App\Http\Controllers\SousPeriodeController::class, 'formulaire_sous_periode'])->name('gestscol.formulaire_sous_periode');
        //Route::get('/gestscol/emploi_enseignant', [App\Http\Controllers\ClasseController::class, 'emploi_enseignant'])->name('gestscol.emploi_enseignant');
    });
    /** end */

    /** evaluation route */
    Route::middleware([])->group(function () {
        Route::get('/gestscol/liste_evaluation', [App\Http\Controllers\EvaluationController::class, 'liste_evaluation'])->name('gestscol.list_evaluation');
        Route::get('/gestscol/formulaire_evaluation', [App\Http\Controllers\EvaluationController::class, 'formulaire_evaluation'])->name('gestscol.formulaire_evaluation');
        //Route::get('/gestscol/emploi_enseignant', [App\Http\Controllers\ClasseController::class, 'emploi_enseignant'])->name('gestscol.emploi_enseignant');
    });
    /** end */

       /** sanction route */
       Route::middleware([])->group(function () {
        Route::get('/gestscol/liste_sanction', [App\Http\Controllers\SanctionController::class, 'liste_sanction'])->name('gestscol.liste_sanction');
        Route::get('/gestscol/formulaire_sanction', [App\Http\Controllers\SanctionController::class, 'formulaire_sanction'])->name('gestscol.formulaire_sanction');
        Route::post('/gestscol/sanction/create', [App\Http\Controllers\SanctionController::class, 'create'])->name('gestscol.sanction.create');
        Route::get('/gestscol/sanction/formulaire_sanction/{id}', [App\Http\Controllers\SanctionController::class, 'formulaire_sanction_update'])->name('gestscol.formulaire_sanction.update');
        Route::post('/gestscol/sanction/update', [App\Http\Controllers\SanctionController::class, 'update'])->name('gestscol.sanction.update');
        Route::get('/gestscol/sanction/delete/{id}', [App\Http\Controllers\SanctionController::class, 'delete'])->name('gestscol.sanction.delete');
        
        Route::get('/gestscol/sanction/parametrage/edit/{id}', [App\Http\Controllers\SanctionController::class, 'parametrage_edit'])->name('gestscol.sanction.parametrage.edit');
        Route::get('/gestscol/sanction/parametrage', [App\Http\Controllers\SanctionController::class, 'parametrage'])->name('gestscol.sanction.parametrage');
        Route::post('/gestscol/sanction/parametrage', [App\Http\Controllers\SanctionController::class, 'parametrage_create'])->name('gestscol.sanction.parametrage.create');
        Route::post('/gestscol/sanction/parametrage/update', [App\Http\Controllers\SanctionController::class, 'parametrage_update'])->name('gestscol.sanction.parametrage.update');
        Route::get('/gestscol/sanction/parametrage/delete/{id}', [App\Http\Controllers\SanctionController::class, 'parametrage_delete'])->name('gestscol.sanction.parametrage.delete');
    
    });
    /** end */

    Route::get('/gestscol/matricule', [App\Http\Controllers\EtablissementController::class, 'matricule_etablissement'])->name('gestscol.matricule_etablissement');
   


?>
