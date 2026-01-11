<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use App\Models\Greeting;
use Database\Factories\ArticleFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Greeting::create(['name' => 'Hello']);
        Greeting::create(['name' => 'Hi']);
        Greeting::create(['name' => 'Hey']);
        Greeting::create(['name' => 'Howdy']);

        Article::factory(100)->create();
    }
}
