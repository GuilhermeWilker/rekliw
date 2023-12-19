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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::create([
            'first_name' => 'Guilherme',
            'last_name' => 'Wilker',
            'email' => 'wilkerguilherme0@gmail.com',
            'password' => '123456789',
        ]);
        \App\Models\User::create([
            'first_name' => 'Joana',
            'last_name' => 'Fraga',
            'email' => 'joana@gmail.com',
            'password' => '123456789',
        ]);
    }
}
