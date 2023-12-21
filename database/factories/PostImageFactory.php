<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use App\Models\PostImage;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostImage>
 */
class PostImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // it would be great to first find a post without a image and attach image to it 
        // maybe create a seperate factory that find a post without image and attach image to it
        $user = rand(1,3);
        $post = Post::factory()->create();
        
        $postTitle = $post->title;
        $userFullname = Str::slug(User::find($user)->name, '_');
        $imagePath = 'user_images/'. $userFullname . '/';
        $catImages = ['cat-1.jpg', 'cat-2.jpg', 'cat-3.jpg'];
        $cat = fake()->randomElements($catImages);
        
        return [
            'user_id' => $user,
            'post_id' => $post,
            'image_path' =>  $imagePath,
            'image_name' => $cat[0],
            'image_alt' => $postTitle,
        ];
    }
}
