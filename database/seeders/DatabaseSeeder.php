<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        User::factory(10)->create();

        Post::factory(10)->create([
            'user_id' => User::find(1)->id
        ]);

        Comment::factory(10)->create(
            [
                'user_id' => User::find(1)->id,
                'post_id' => Post::find(1)->id
                // 'post_id' => User::with('posts')->get('id')
            ]
        );

    }
}
