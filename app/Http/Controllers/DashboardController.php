<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {

        $posts = User::with('posts')
            ->where('active',false)
            ->latest()
            ->get()
         ;   // ->collect()
            // ->map(fn($users) => $users['posts']);
        return $posts->map(fn($users) => $users['posts']);
        return Inertia::render('Dashboard/Index', ['posts' => $posts]);
    }
}
