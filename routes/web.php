<?php

use App\Models\Blog;
use App\Models\Post;
use App\Models\User;
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


    return Inertia::render('Users', [
        'users'=>  User::activeUsers()
            ->orderByDesc('id')
            ->paginate(1),
        // 'posts' => User::find(1)->blogs
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
});

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

    User::create($attributes);

    // redirect to users page

    return redirect('users')->with(['msg' => 'user created successfully']);

    
});