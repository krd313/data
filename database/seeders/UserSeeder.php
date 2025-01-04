<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            //Midas
            [
                'name' => 'midas',
                'email' => 'midas@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'midas',
                'status' => 'active',
            ],

            //Admin
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'status' => 'active',
            ],
            //User
            [
                'name' => 'test',
                'email' => 'test@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'user',
                'status' => 'active',
            ],

            ]);



    }


    // {
    //     User::factory()->create([
    //         'name' => 'Test',
    //         'email' => 'test@gmail.com',
    //         'password' => bcrypt('password')
    //     ]);
    // }
}
