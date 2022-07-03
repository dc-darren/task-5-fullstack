<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@asd.asd',
            'password' => Hash::make('user'),
        ]);
        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@asd.asd',
            'password' => Hash::make('user2'),
        ]);

        DB::table('categories')->insert([
            'name' => 'cat1',
            'user_id' => 1,
        ]);
        DB::table('categories')->insert([
            'name' => 'cat2',
            'user_id' => 2,
        ]);

        DB::table('articles')->insert([
            'title' => 'this is a title',
            'content' => 'this is a content',
            'image' => 'n/a',
            'user_id' => 1,
            'category_id' => 1,
        ]);
        DB::table('articles')->insert([
            'title' => 'this is a title2',
            'content' => 'this is a content2',
            'image' => 'n/a',
            'user_id' => 2,
            'category_id' => 2,
        ]);
    }
}
