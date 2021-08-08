<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

class AdminController extends Controller
{
    public function createAdmin() {
    	return view('createAdmin');
    }

    public function connectAdmin() {
    	return view('connectAdmin');
    }

    public function authAdmin() {
        return view('auth.login');
    }

    function saveAdmin(Request $request) {
    	$request->validate([
    		 'login'=>'required|unique:admin',
    		 'email'=>'required|email',
    		 'password'=>'required|min:10|confirmed',
    		 'nom'=>'required',
    		 'telephone'=>'required',
    		 'email'=>'required',
    	]);

		$admin = new admin;

		$admin->login = $request->login;
		$admin->email = $request->email;
		$admin->password = $request->password;
		$admin->nom = $request->nom;
		$admin->telephone = $request->telephone;
		$admin->enabled = false;
		$admin->creation_date = date("Y-m-d");

		$save = $admin->save();

		if($save){
			return back()->with('success', 'administrateur enregistré avec success');
		}else {
			return back()->with('fail', 'erreur d\'enregistrement de l\'administrateur');
		}
    }
}
