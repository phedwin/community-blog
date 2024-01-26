<?php


use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\Mail\signupWeeklyNewsletter;
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


Route::get('register', [SessionController::class, 'index']);

Route::post('register', [SessionController::class, 'store']);

//mails
Route::get('newsletter', [signupWeeklyNewsletter::class, 'index']);
Route::post('mails', [signupWeeklyNewsletter::class, 'store']);