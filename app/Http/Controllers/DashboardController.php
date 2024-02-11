<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        
        return Inertia::render('Dashboard/Index', ['posts' => $posts]);
    }
}
