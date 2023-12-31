<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class sessioncontroller extends Controller
{
   
    public function store()

    {
        
        return Inertia::render('Auth/GuestLayout', ['name' => 'phedwine']);
    }

    public function index()

    {
        return Inertia::render('Auth/session');
    }
}
