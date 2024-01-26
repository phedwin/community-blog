<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormRequestValidation;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Access\Gate;
use Inertia\Inertia;

class SessionController extends Controller
{
    public function __construct(protected User $users)
    {
        //here         
    }
    public function index()
    {
        return Inertia::render('Auth/Create');
    }
    
    public function store(FormRequestValidation $request)
    {
        //collect form attributes
        $attributes = $this->users->create($request->validated());

        //login w/ form
        auth()->login($this->users->create($attributes));

        return redirect(RouteServiceProvider::HOME)
            ->with(['msg' => auth()->username."hello"]);
            
    }

    public function destroy($id)
    {
        // run some policy or gates
        
        
    }
    
    
}
