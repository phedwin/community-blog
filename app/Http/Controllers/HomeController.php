<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render(auth()->check() ? 'Layout/AuthLayout' : 'Layout/GuestLayout' );
    }

    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }
    
}
