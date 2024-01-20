<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Schema\Blueprint;

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



/**
 * 
 * lazy loading is disabled
 */

Route::get('/', function()
{
    // Retrieve a collection of users without eager loading
    $users = User::all();

    // Access the 'posts' relationship for each user, triggering lazy loading
    foreach ($users as $user) {
        $posts = $user->posts;

        return $posts;
        // Do something with the posts for each user
    }

    return $users;
});


