<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function (Request $request) {
    // return view('welcome');
    // $mode = ['light', 'dark']
    $value = Request()->session()->put(['name' => "phedwine", 'mode' => ['light', 'dark']]);
    // while(false)
    // {
        // $request->session()->invalidate();

        // $request->session()->regenerateToken();
    // }

    // $request->session()
    
    return Request()->session()->get('_token'); 
    // return App\Providers\RouteServiceProvider::HOME; 
});
