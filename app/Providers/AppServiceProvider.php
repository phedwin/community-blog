<?php

namespace App\Providers;

use BeyondCode\Mailbox\Facades\Mailbox;
use BeyondCode\Mailbox\InboundEmail;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */

    public function __invoke(InboundEmail $email)
    
    {
        // Handle the incoming email
    }
    
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Mailbox::from('sender@domain.com', function (InboundEmail $email) {
            // Handle the incoming email
        });
    }
}
