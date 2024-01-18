<?php

use App\Http\Controllers\Auth\SessionController;
use Illuminate\Support\Facades\Route;



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


Route::controller(SessionController::class)->group(function()
{

    //handle registration
    Route::get('/register', 'index');
        // ->name('show.session')
        // ->middleware('guest');
    Route::post('/', 'store')
        ->name('register');

    // handle user login

    //Route::get('/login', 'login'); // could have made single controller function with invoke but hmmm too lazy :)
    //Route::get('/login', 'authenticate'); // stick to laravel create, store, detroy namepoints hmmm ? yeah.
});

