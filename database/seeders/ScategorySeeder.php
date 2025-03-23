<?php

namespace Database\Seeders;

use App\Models\Scategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ScategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/data/scategories.json');
        $scategories = collect(json_decode($json, true));

        $scategories->each(function($scategory) {
            Scategory::create([
                'name' => $scategory['name'],
                'description' => $scategory['description'],
                'slug' => $scategory['slug']
            ]);
        });
    }
}
