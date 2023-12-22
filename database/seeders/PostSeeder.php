<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * When seeding a post it does not have a image
     * but when seeding a PostImage it also create a post with image designated to it
     */
    public function run(): void
    {
        // creating post for first 3 user (defualt users)
        $users = User::limit(3)->get();
        
        // Create 2 posts for each specific user
        foreach ($users as $user) {
            Post::factory()->count(2)->create(['user_id' => $user->id]);
        }

        // Generating a post for a distinct new user. Similar to UserSeeder but in reverse (BelongsTo).
        // Post::factory()
        //     ->count(3)
        //     ->for(User::factory()->state([
        //         'name' => 'Jessica Archer',
        //     ]))
        //     ->create();
    }
}
