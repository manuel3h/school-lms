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
            'name' => 'Manuel Hazoury',
            'email' => 'manuel3h@gmail.com',
            'password' => bcrypt(value:'Trkn4xf7b9'),
        ]);
    }
}
