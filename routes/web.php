<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
    return redirect('bash/dash');
});

Route::get('/bash/dash', function()

{
    return User::find(1)->only('username', 'email');
    return 'this is the token '.session()->get('_token');
});

Route::get('/users/{id}', function($id)
{
    $category = Category::all();

    return $category;
});

