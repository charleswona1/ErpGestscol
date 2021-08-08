<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    public function addEnseignant() {
    	return view('gestscol.gestscol-Formprof');
    }
}
