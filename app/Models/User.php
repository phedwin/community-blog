<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Casts\Json;
use App\Enums\Status;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
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
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = 
    [
        'status' => Status::class,    
        'user_info' => Json::class, // realized halfway this cast json doesnt actually exist in laravel casts
        //we can deserialize this with array or ` php artisan make:cast Json`
        //here 
        // 'user_info' => 'json',
        'email_verified_at' => 'datetime',
        // 'password' => 'hashed',
    ];


    /**
     * 
     * wouldnt need mutators but huh?
     * $table->binary('profile_photo')
     * 
     * so hmmm here 
     */
    
    public function profilePhoto() : Attribute
    {
        return Attribute::make(
            get : fn($value) => base64_decode($value),
            set : fn($value) => base64_encode($value)
        );
    }

    public function userinfo() : Attribute
    {

        return Attribute::make(

        );
    }


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
        // true  || false 
        return $query->where('active', rand(1,0));
    }
   
    
    public function category() : HasOne
    {
        
        //under the hood relationships works like 
        //1
        dd($category = static::self()->category ?? throw new ModelNotFoundException);

        //
        return $category;

        //2
        return $this->hasOne(Category::class, 'category_users_id', /***here w/ owner key */'owner_key');

        //3
        return $this->hasOne(Category::class);// assumes user_id on fly
    }

    public function scopeStatus()
    {
        // build query that only gets published
    }
}
