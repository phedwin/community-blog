<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class greetings extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:greetings';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = \App\Models\User::find(1)->email;
        print_r("The email was sent ".$email."\n");
    }
}
