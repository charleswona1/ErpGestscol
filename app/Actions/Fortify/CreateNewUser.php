<?php

namespace App\Actions\Fortify;

use App\Models\admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'nom' => ['required', 'string', 'max:255'],
            'login' => ['required', 'unique:admin', 'max:255',  Rule::unique(admin::class),],
            'telephone' => ['required', 'max:30'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        return admin::create([
            'nom' => $input['nom'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'login' => $input['login'],
            'telephone' => $input['telephone'],
            'enabled' => false,
            'creation_date' => date("Y-m-d"),
        ]);
    }
}
