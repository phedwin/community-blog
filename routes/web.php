<?php


use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\Mail\signupWeeklyNewsletter;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use function PHPSTORM_META\map;

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
    $data = ['name' => "phedwine", "lastname" => "john", "greetings" => "hey", "position" => 1];
    return Inertia::render('Auth/Login', ['data' => $data]);

});
