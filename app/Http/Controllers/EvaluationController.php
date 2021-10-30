<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function liste_evaluation() {
        return view('gestscol.ressource.evaluation.list_evaluation');
    }

    public function formulaire_evaluation() {
        return view('gestscol.ressource.evaluation.formulaire_evaluation');
    }

    public function store(Request $request){
        
    }
}
