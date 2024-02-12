<?php

use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\DashboardController;
use App\Providers\RouteServiceProvider;
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
Route::get('/', function()
{
    return redirect(RouteServiceProvider::HOME);
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('register', [SessionController::class, 'index'])->name('login')->middleware('guest');
Route::post('register', [SessionController::class, 'store'])->name('register.store');


Route::post('logout', [SessionController::class, 'destroy'])->name('destroy')->middleware('auth');