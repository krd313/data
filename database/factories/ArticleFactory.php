<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Scategory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->unique()->sentence;
        $slug = Str::slug($title);

        return [
            'title' => $title,
            'slug' => $slug,
            'excerpt' => fake()->paragraphs(2, true),
            'description' => fake()->paragraphs(8, true),
            'status' => true,
            'user_id' => User::inRandomOrder()->value('id'),
            'scategory_id' => Scategory::inRandomOrder()->value('id')
        ];
    }
}
