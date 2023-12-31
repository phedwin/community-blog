<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\sessioncontroller;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('register', [sessionController::class, 'index']);
Route::get('/register', function()
{
    $users = User::all();

    return Inertia::render('Auth/session', ['users' => $users]);
});

Route::get('users', function()
{

    return Inertia::render('Auth/session');
});


