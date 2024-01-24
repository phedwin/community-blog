<?php

use App\Enums\Status;
use App\Http\Controllers\Auth\SessionController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
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

Route::get('collection', function()
{
    $collection = collect(['phedwine', 'ochieng', null])->map(fn($users) => ucfirst($users))
        ->reject(fn($users) => empty($users));

    return $collection;
});
Route::get('/cache', function()
{
    
    fn() =>  DB::update('update users set firstName = ? where id =  ?', ['John Doe', 3]); //['John Doe', 3]);  
    Cache::remember('users', 60, fn() => $users = User::with('posts')->get());
    // a user loaded posts and added some new posts ;)
    
    return Cache::get('users');
    return Cache::has('cache') ?? throw new  ModelNotFoundException; // wow, learnt false !=  null; wow. 
});


//testing Model::shouldBeStrict();
Route::get('/lazy', function()
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


