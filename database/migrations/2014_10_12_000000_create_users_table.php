<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */



    
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()
                ->comment('this should auto increment');

            /**
             * 
             * IDK maybe $table->string() would be easier to implement and store
             * also thinking of Storage facade
             * still dont know how binary exactly works.
             * 
             */
            $table->binary('profile_photo')
                ->nullable(); 
            /**
             * @this comes with a unique key everytime remember is enable w/ client
             * but im trying out w/ bool that defaults to false
             * 
             * something like $table->string('remember) -> to hold the (string)key
             */
            $table->boolean('remember')
                ->default(false);

            $table->boolean('active')
                ->default(false);

            $table->string('username');

            $table->string('email');
            
            $table->timestamp('email_verified_at')
                ->nullable();

            $table->string('password');

            $table->rememberToken();
           $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
