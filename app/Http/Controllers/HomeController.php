<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');// ['user' => Auth::user()]);
    }

    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // ret
    }
    
}
