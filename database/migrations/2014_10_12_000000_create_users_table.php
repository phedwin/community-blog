<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;
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
            $table->id();

            /**
             * 
             * IDK maybe $table->string() would be easier to implement and store
             * also thinking of Storage facade
             * still dont know how binary exactly works.
             * 
             * 
             * mutators and accessor w/ base64_encode() && base64_decode($value)
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

            $table->string('email')
                ->unique();

            $table->string('password');

            $table->rememberToken();

            $table->json('user_info')
                ->default(new Expression('(JSON_ARRAY())'));

            /**
             * 
             * in the boot of AppServiceProvider we define a blueprint macro
             * w/ softdeletes && timestamps -> created && updated at
             * 
             */

            $table->auditFields();


            /**
             * 
             * get this inside audit
             */
            $table->timestamp('email_verified_at')
                ->nullable();
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
