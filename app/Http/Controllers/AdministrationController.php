<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public function getAcceuilAdmin()
    {
    	return view('administration.index1');
    }

    public function home()
    {
    	return view('administration.home');
    }

    public function adminEtablissement()
    {
    	return view('administration.etablissements');
    }

    public function adminUtilisateur()
    {
    	return view('administration.utilisateurs');
    }

    public function adminLicence()
    {
    	return view('administration.licences');
    }

    public function adminGroupeConfig()
    {
    	return view('administration.config-admin-groupe');
    }

    public function adminParamConfig()
    {
    	return view('administration.config-admin-parametrages');
    }
}
