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

            $table->string('firstName', 25)
                ->nullable();

            $table->string('secondName', 25)
                ->nullable();

            $table->binary('profile_photo')
                ->nullable(); 

            $table->boolean('remember')
                ->default(false);

            $table->boolean('active')
                ->default(false);

            $table->string('username');

            $table->string('email')
                ->unique();

            $table->string('password');

            $table->rememberToken()
                ->nullable();

            $table->json('user_info')
                ->default(new Expression('(JSON_ARRAY())'));

            $table->auditFields();
            
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
