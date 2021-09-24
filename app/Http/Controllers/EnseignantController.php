<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    public function addEnseignant() {
    	return view('gestscol.gestscol-Formprof');
    }

    public function liste_enseignant() {
        return view('gestscol.ressource.enseignant.list_enseignant');
    }

    public function creer_enseignant() {
        return view('gestscol.ressource.enseignant.creer_enseignant');
    }
}
