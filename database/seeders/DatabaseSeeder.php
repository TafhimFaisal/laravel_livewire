<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        // \App\Models\Comment::factory(20)->create();
        // \App\Models\Book::factory(100)->create();
        // \App\Models\Chapter::factory(300)->create();
        // \App\Models\Section::factory(1000)->create();
        \App\Models\Image::factory(500)->create();
    }
}
