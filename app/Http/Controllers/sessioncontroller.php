<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
class sessioncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd($request);
        return view('Auth.register');
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }


    
    /**
     * Display the specified resource.
     */
    public function authenticate(Request $request)
    {
        if($request->header() === null)
        {
            return "hello world";
        }

    }


    public function logout(Request $request)
    {

    }
}
