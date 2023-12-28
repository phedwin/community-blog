<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 30; $i++)
        { 
            DB::table('posts')
            ->insert(
                [
                    'user_id' => User::find(1)->id,
                    'excerpt'=> Str::random(),
                    'author' => Str::random(),
                    'paragraph' => Str::random()
                ]
                ); 
        }
        
    }
}
