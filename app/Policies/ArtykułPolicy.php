<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArtykułPolicy
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

    public function viewAny(User $user)
    {   
        return $user->role == "uzytkownik" || $user->role == "admin";
    }

    public function create(User $user)
    {
        return $user->role == "admin";
    }
}
