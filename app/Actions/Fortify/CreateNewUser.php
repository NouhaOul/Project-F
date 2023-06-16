<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Validation\Rule;
class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'tele' => ['required', 'string', 'max:255'],
            'adress' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'role' => ['required', 'string', 'max:255'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ];
    
        if ($input['role'] === 'coach') {
            $rules['cv'] = ['required', 'string', 'max:255'];
            $rules['image'] = ['required', 'string', 'max:255'];
        }
    
        Validator::make($input, $rules)->validate();
    
        return User::create([
            'name' => $input['name'],
            'prenom' => $input['prenom'],
            'tele' => $input['tele'],
            'adress' => $input['adress'],
            'email' => $input['email'],
            'cv' => $input['cv'] ?? null,
            'image' => $input['image'] ?? null,
            'role' => $input['role'],
            'password' => Hash::make($input['password']),
        ]);
    }
}


// 'cv' => ['required', 'string', 'max:255'],
// 'image' => ['required', 'string', 'max:255'],

