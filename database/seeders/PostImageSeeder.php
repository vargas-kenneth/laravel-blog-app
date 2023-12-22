<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\PostImage;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Retrieve users with IDs 1, 2, and 3 along with their respective posts, then create a post image based on the gathered data.
        $users = User::limit(3)->get();


        foreach ($users as $user) {
            $userPosts = Post::whereBelongsTo($user)->get();
            $userFullname = Str::slug($user->name, '_');
            
            foreach ($userPosts as $post) {
                $postImage = PostImage::where('post_id', $post->post_id)->exists();

                if (!$postImage) {
                    PostImage::factory()->create([
                        'user_id' => $user->id,
                        'post_id' => $post->post_id,
                        'image_path' => 'user_images/'. $userFullname . '/',
                        'image_alt' => $post->title,
                    ]);
                }
            }
        }
    }
}
