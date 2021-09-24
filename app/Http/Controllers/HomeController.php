<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
    	return view('administration.home');
    }

    public function home_gestscol() {
    	return view('gestscol.gestscol-tb');
    }

    public function home_configuration() {
    	return view('configuration.utilisateurs-tb');
    }

    public function homeGestscol() {
        return view('gestscol.dashboard');
    }
}
