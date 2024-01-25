<?php

use App\Enums\Status;
use App\Http\Controllers\Auth\SessionController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
/***
 | ------------------------------------------------------------------------
 | ["Author" => "phedwin"];
 | ------------------------------------------------------------------------
 |
 | There is alot of unneccessary return statements hmmmmm;
 | This will be removed// or u can remove to suit ur needs.
 | im testing out alot of laravel features & I genuinely want to see how they work.
 | Im not routing any controller that u can see in the controllers namespace, alot of code here
 | is experimental & will be removed after I actually see how this works :))))))
 |
 |
 | 
 */
Route::get('collection', function()
{
    $users = User::all(); //how do i check if this returns a collection so i can collect()->except([]) prevent everything from hititng client
    //collections   ...Woah How can Laravel be this gooodddd? this little collect() helper is doing magic.
    // return $users === collect() ? 1  : 0; // make sense
    // dd($users); // but this returns an eloquent collection hmmmmmm? 
    // return $users->map(fn($user) => $user)->except(['firstName', 'secondName']);

    //1
    $usersCollection = collect($users->toArray());

    $filteredUsers = $usersCollection->except(['firstName', 'secondName']);
    // Now $filteredUsers contains the users with the specified attributes filtered out
    return $filteredUsers[0];

    //2
    $filteredUsers = collect($users->makeVisible(['firstName', 'secondName'])->toArray());
    // Now $filteredUsers contains the users with the specified attributes visible


    $median = collect(['first' => 34,'second' => 54,'third' => 6,'fourth' => 56])->map(fn($data) => $data )->except(['first', 'second']);

    return $median;

    $totals = collect(['first' => 34,'second' => 54,'third' => 6,'fourth' => 56])->map(fn($data) => $data )->countBy()->all();


    // dd($totals); 
    // what if we had a collection and just dd on the fly then dd again huhhhhhhh? Here
    $numbers = collect([1,23,435,45])->dd();

    dd($numbers); // funny dunnoo why i expected a dd inside a dd. maybe its just $this->dump(...args); >> $this->dump($this->dunmp()) ?? Yeahhhh

    $contains = collect(['first' => 34,'second' => 54,'third' => 6,'fourth' => 56])->contains(fn($data) => $data);
    // kinda like collection contains

    return json_decode($contains);
    foreach(User::all()->chunk(3) as $users)
    {
        return $users->uppercase(); //btw this is defined as macro inside serviceprovider
    }




});
Route::get('/cache', function()
{
    //this should work but it dont, it works in my head tho. 
    //Maybe it comes prebaked against SQL injection & i can just pass inline arguments.
    fn() =>  DB::update('update users set firstName = ? where id =  ?', ['John Doe', 3]); //['John Doe', 3]);  
    Cache::remember('users', 60, fn() => User::with('posts')->get());
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


