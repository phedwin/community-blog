<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\Status;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
   

        
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            /**
             * 
             * create enums from seperate file
             * 
             * todo
             */
            // $table->enum('status', ['draft', 'published']);
            $table->enum('status', [Status::DRAFT, Status::PUBLISHED])
                ->default(Status::DRAFT);

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            // $table->foreignId('category_id')
            //     ->constrained(); 

            $table->text('title');
            $table->text('context');
            
            $table->auditFields();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
