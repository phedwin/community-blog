<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormRequestValidation;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class SessionController extends Controller
{
    public function index()
    {
        return Inertia::render('Auth/Sessions');
    }
    
    public function store(FormRequestValidation $request)
    {
        
        // User::create($request->validate());
        $attributes = Request::validate([
            'username' => 'required' | 'min:3' ,
            'password' => 'required' | 'min:6',
            'email' => 'email'| 'required'
        ]);

        auth()->login(User::create($attributes));

        return redirect(RouteServiceProvider::HOME)
            ->with(['msg' => auth()->username."hello"]);
    }

    
}
