<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory()->create([
             'name' => 'TestUser',
             'email' => 'test@example.com',
             'isAdmin' => 0,
         ]);

        \App\Models\User::factory()->create([
            'name' => 'TestAdmin',
            'email' => 'admin@example.com',
            'isAdmin' => 1,
        ]);
    }
}
