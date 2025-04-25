<?php

namespace Database\Seeders;

use App\Models\User;
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
        //     'name' => 'David',
        //     'email' => 'david@dedaaf.com',
        //     'password' => bcrypt('novacollege99'),
        // ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@dedaaf.com',
            'password' => bcrypt('novacollege99'),

        ]);
    }
}
