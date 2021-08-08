<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
    	return view('home');
    }

    public function home_gestscol() {
    	return view('gestscol.gestscol-tb');
    }

    public function home_configuration() {
    	return view('configuration.utilisateurs-tb');
    }
}
