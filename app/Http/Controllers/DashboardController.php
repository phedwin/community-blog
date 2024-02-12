<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function __construct(protected Post $posts)
    {
        
    }
    public function index()
    {
        $posts = $this->posts->all();
        return Inertia::render('Dashboard/Index', ['posts' => $posts]);
    }

    public function show($id)
    {
        $post = $this->posts->find($id) ?? throw new ModelNotFoundException();

        return Inertia::render('Dashboard/Show', ['post' => $post]);
    }
    
}
