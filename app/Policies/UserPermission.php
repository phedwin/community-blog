<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Http;

class UserPermission
{
    /**
     * Create a new policy instance.
     */
    public function __construct(protected User  $user)
    {
        //
    }

    //hmmm how would this work
    public function canDelete($id)
    {
        return $this->user->id === $id ? true : abort(403);
    }
}
