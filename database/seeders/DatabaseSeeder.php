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
            'name' => 'Amanda',
            'email' => 'amanda@gmail.com',
            'username' => 'amanda   ',
            'phone' => '087827303327',
            'address' => 'Bandung',
            'role' => 'admin',
            'password' => bcrypt('password'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Fadli',
            'email' => 'fadli@gmail.com',
            'username' => 'fadli   ',
            'phone' => '087827393327',
            'address' => 'Tangerang ',
            'role' => 'user',
            'password' => bcrypt('password'),
        ]);
    }
}
