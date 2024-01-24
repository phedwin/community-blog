<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\ServiceProvider;

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
