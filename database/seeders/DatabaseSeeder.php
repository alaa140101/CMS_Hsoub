<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
Use App\Models\Post;

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
        User::factory()
        ->times(5)
        ->has(Post::factory()->count(5))
        ->create();
    }
}
