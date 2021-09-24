<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatiereController extends Controller
{
    function liste_matiere() {
        return view('gestscol.ressource.matiere.list_matiere');
    }

    function creer_matiere() {
        return view('gestscol.ressource.matiere.creer_matiere');
    }

    function groupe_matiere() {

    }
}
