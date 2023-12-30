<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class sessioncontroller extends Controller
{
    public function index()
    {
        $data = [
            'msg' => 'hello from everyone'
        ];

        return Inertia::render('Auth/session', $data);
    }


    public function store(User $user)

    {
        return Inertia::render(
            'Auth/register', 
            ['users' => $user]
        );
    }
}
