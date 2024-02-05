<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Eng Kimenyuka',
            'email' => 'kimenyuka@gmail.com',
            'role' =>'Director',
             'profile_photo_path' => 'assets/profile-photos/test1.png',
            'password' => bcrypt('password'),
        ]);

         \App\Models\User::factory()->create([
            'name' => 'Mwl Kimenyuka',
            'email' => 'mwalimu@gmail.com',
            'role' =>'Administrator',
             'profile_photo_path' => 'assets/profile-photos/test.png',
            'password' => bcrypt('password'),
        ]);
    }
}