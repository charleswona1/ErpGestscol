<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;

class UserController extends Controller
{
    public function createUser() {
    	return view('createUser');
    }

    public function connectUser() {
    	return view('connectUser');
    }

    public function authUser() {
    	return view('auth.login1');
    }

    public function listUser() {
        return view('user.utilisateurs-usr');
    }

    public function groupUser() {
        return view('user.utilisateurs-gr');
    }

    public function UserTb() {
        return view('configuration.utilisateurs-tb');
    }

    function saveUser(Request $request) {
    	$request->validate([
    		 'login'=>'required|unique:user',
    		 'email'=>'required:email',
    		 'password'=>[
				 'required', 
				 'confirmed', 
				 Password::min(8)
				->letters()
				->numbers()
				->mixedCase()
				->symbols()],
    		 'nom'=>'required',
    		 'telephone'=>'required',
    		 'email'=>'required',
    	]);

		$user = new User;

		$user->login = $request->login;
		$user->email = $request->email;
		$user->password = $request->password;
		$user->nom = $request->nom;
		$user->telephone = $request->telephone;
		$user->enabled = false;
		$user->creation_date = date("Y-m-d");

		$save = $user->save();

		if($save){
			return back()->with('success', 'Utilisateur enregistré avec success');
		}else {
			return back()->with('fail', 'erreur d\'enregistrement de l\'utilisateur');
		}
    }


}
