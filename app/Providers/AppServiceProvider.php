<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */

    
    
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Collection::macro('uppercase', function()
            {
                /** @var map  $this */
                return $this->map(fn($str):?string => Str::upper($str)) 
                    ->reject(fn($str) => empty($str));
            });

        Model::shouldBeStrict();

        Model::unguard(); // bad idea.

        
        Blueprint::macro('auditFields', function() 
        {
            /** @var Blueprint $this */
            $this->timestamps();
            $this->softDeletes();
        });
    }
}
