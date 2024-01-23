<?php

use App\Enums\Status;
use App\Http\Controllers\Auth\SessionController;
use App\Models\Category;
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

Route::get('/', [SessionController::class, 'index']);
Route::post('/', [SessionController::class, 'store']);
Route::get('/loops', function()
{

    // dd(Category::all()->count());
    for ($i=0; $i < Category::all()->count(); $i++) { 
        $Category = Category::find($i) ;//?? throw new ModelNotFoundException();

        return $Category;
    }
    return $Category;
    // return Category::find(20)->id ?? throw new ModelNotFoundException();
});

/**
 * 
 * lazy loading is disabled
 */

Route::get('/lazy-loading', function()
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


