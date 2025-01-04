<?php

namespace Database\Seeders;

use App\Models\Priority;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(base_path('database/json/priorities.json'));
        $posts = collect(json_decode($json, true));

        $posts->each(function ($post) {
            Priority::create([
                'user_id' => $post['user_id']?? 1,
                'name' => $post['name'],
                'number' => $post['number'],
                'color' => $post['color'],
            ]);
        });




    }
}
