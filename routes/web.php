<?php

use App\Models\Blog;
use App\Models\Post;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;
use Inertia\Inertia;


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




Route::get("/",function()

{

    // dd($this->status);
    return Inertia::render('Home', [
        'name'=> 'ochieng phedwine',
        'frameworks'=> [
            'laravel', 'vue', 'inertia'
        ],
    ]);
});

Route::get('settings', function() {
    return Inertia::render('Settings');
})
    ->name('settings');

Route::get('users', function() {

    
    // dd(Auth::user()->only('email', 'password', 'username'));

    return Inertia::render('Users/Index', [
        'users'=>  User::activeUsers()
        //restrict this to only push username & email 
        // at this point its just demo and evrything from db can be seen when the request is made
            ->orderByDesc('id')
            ->paginate(1),
        'posts' => User::with('blogs')->paginate(1)
    ]);
});




Route::post('/users', function(User $user)

{
    $validated = request()->validate(
        [
            'email' => Rule::unique('users'), 
            'password' => "min:4"|"max:40", 
            'username' => 'required'| 'min :3'
        ]
    );


    ($user->getGuarded());

    dd(auth()->user());
    // auth()->login(User::create($validated));
    $password  = encrypt($user->find(1)->only('password'));
    (decrypt($password));
    ($user->find(1)->only('email', 'username', 'active', 'password'));

    (User::find(1)->only(['email', 'username', 'id']));

    return back()->with(['success' => "acccount created"]);
});


Route::get('users/create', function()
{
    
    return Inertia::render('Users/Create');
})->middleware('guest');

Route::post('users', function()
{
    //validate user data
    $attributes = request()->validate(
        [
            'username' => ['required'],
            'email' => ['email', 'required'],
            'password' => ['required']
        ]
    );

    //if passes validation then create users

    $user  = User::create($attributes);

    // redirect to users page

    auth()->login($user);

    return redirect('users')->with(['msg' => 'user created successfully']);

    
});


Route::post('logout', function(){
    auth()->logout();

    session()->invalidate();

    session()->regenerateToken();

    return redirect(RouteServiceProvider::HOME)->with(['msg' => "logged out"]);
});