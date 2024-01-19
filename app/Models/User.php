<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     * 
     * 
     */


    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        // 'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        // 'password' => 'hashed',
    ];


    public function posts() : HasMany
    {
        return $this->hasMany(Post::class);
    }
    

    public function comments()

    {
        return $this->hasMany(Comment::class);
    }

    public function scopeActive(Builder $query) : Builder
    {
        return $query->where('active', rand(1,0));
    }

    public function category() : HasOne
    {
        return $this->hasOne(Category::class);// assumes user_id on fly

        //under the hodd relationships works like 
        dd($category = static::self()->category ?? throw new ModelNotFoundException);

        return $category;

        return $this->hasOne(Category::class, 'category_users_id', 'owner_key');
    }
}
