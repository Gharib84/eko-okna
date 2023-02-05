<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ManageRolePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function JestAdmin(User $user) 
    {
        return $user->role == "admin";
    }

    public function JestUzytkownik(User $user)
    {
        return $user->role == "uzytkownik";
    }
}
