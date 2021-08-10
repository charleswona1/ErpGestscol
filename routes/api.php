<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/classe/ajouterClasse', [App\Http\Controllers\ClasseController::class, 'store'])->name('classe.store');
Route::get('/classe/listeClasse', [App\Http\Controllers\ClasseController::class, 'index'])->name('classe.index');
Route::delete('/classe/supprimerClasse/{id}', [App\Http\Controllers\ClasseController::class, 'destroy'])->name('classe.destroy');

Route::apiResource('classe', 'ClasseController');
