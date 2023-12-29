<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use DB;

class sessioncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Auth.register');
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validForm= $request->validate(['username' => 'required|min:3', 'password' => 'required', 'email' => 'email']);
        
        $validForm['username'] = $request->input('username');

        User::create($validForm);

        return redirect(RouteServiceProvider::HOME)->with(['msg' => 'acccount successful created']);
    }


    
    /**
     * Display the specified resource.
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->only(['username', 'password']);

        auth()->attempt($credentials);

        $request->session()->regenerateToken();
    }


    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();


        return redirect('/home')->with(['msg' => 'logged in succesful']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
