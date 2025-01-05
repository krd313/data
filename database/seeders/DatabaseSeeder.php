<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Blog;
use App\Models\User;
use App\Models\Article;
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

        // User::factory()->create([
        //     'name' => 'Test',
        //     'email' => 'test@gmail.com',
        //     'password' => bcrypt('password')
        // ]);
        // Blog data seeding


        $this->call([
            UserSeeder::class,
            PrioritySeeder::class,
            ScategorySeeder::class,
        ]);

        User::factory()->count(10)->create();

        Article::factory()
            ->has(Tag::factory()->count(2))
            ->count(50)
            ->create();
        // Blog::factory(100)->create();
    }


}
