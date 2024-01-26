<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Policies\UserPermission;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Inertia\Inertia;

class TestRepository extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __construct(protected User $users){}

    public function index()
    {
        $users = $this->users->all()->map(fn($users) => $users)->collect()->except(['email_verified_at']);

        // return $users;
        //on the vue page we can render 
        Inertia::render('Dashboard/Index', ['users' => $users]);
    }

    public function show(string $id)
    {
        return $this->users->find($id) ?? throw new ModelNotFoundException;// or we could find & fail
    }

    public function destroy(string $id) 
    {    
        $this->authorize(UserPermission::class, User::class);
        
        return $this->users->delete($id);
    }

}
