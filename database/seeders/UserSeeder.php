<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create default user
        User::factory()->create([
            'name' => 'Kenneth Vargas',
            'email' => 'kennethvargas@gmail.com'
        ]);

        User::factory()->create([
            'name' => 'Alvin Censon',
            'email' => 'alvincenson@gmail.com'
        ]);

        User::factory()->create([
            'name' => 'Midoriya Izuku',
            'email' => 'midoriyaizuku@gmail.com'
        ]);

        // create random user with 3 post
        // User::factory()
        //     ->has(Post::factory()->count(3))
        //     ->create();
    }
}
