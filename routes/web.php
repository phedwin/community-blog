<?php

use App\Http\Controllers\ForgetPasswordMailController;
use App\Http\Controllers\sessioncontroller;
use Illuminate\Cache\Console\ForgetCommand;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

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

Route::get('/home', function(Request $request)
{

    $users = DB::select('select * from users where active = ?', [true]);

    // return $request->token;
    $session = Crypt::encrypt($request->session()->get('_token'));


    // return Crypt::decrypt($session) ===  session()->get('_token');
    return session()->all();
    // return view('welcome', ['users' => $users]);
});


Route::get('mails', [ForgetPasswordMailController::class, 'index']);

Route::get('register', [sessioncontroller::class, 'index']);
Route::post('register', [sessioncontroller::class, 'store'])->name('register');
