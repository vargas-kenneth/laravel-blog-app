<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate Tag for the post that doesn't have a tag
        $posts = Post::all();

        foreach ($posts as $post) {
            $postTag = Tag::where('post_id', $post->post_id)->exists();
            
            if (!$postTag) {
                Tag::factory()->create([
                    'post_id' => $post->post_id,
                ]);
            }
        }
    }
}
