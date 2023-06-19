<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class NewUserCreator implements CreatesNewUsers
{
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $input
     * @return Authenticatable
     */
    public function create(array $input)
    {
        // Implement the logic to create a new user
    }
}
