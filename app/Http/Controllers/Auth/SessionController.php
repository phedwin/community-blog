<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Middleware\HandleInertiaRequests;
use App\Models\Post;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SessionController extends Controller
{

    public function __construct(protected User $user,protected Request $request){}
    public function index()
    {
        return Inertia::render('Auth/Session');
    }

    public function store()
    {

        $attributes = $this->request->validate([
            'username' => 'required',
            'password' => 'min:3',
            'email' => 'required | min:3'
        ]);

        $user = $this->user->create($attributes);

        auth()->login($user);

        return redirect(RouteServiceProvider::HOME)->with(['msg' => 'account created']);

    }

    public function destroy()
    {
        auth()->logout();

        $this->request->session()->invalidate();

        return redirect('register')->with(['msg' => "you have logged out"]);
    }
}
