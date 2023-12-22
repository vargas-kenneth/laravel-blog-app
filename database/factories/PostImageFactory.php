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
        $catImages = ['cat-1.jpg', 'cat-2.jpg', 'cat-3.jpg'];
        $cat = fake()->randomElements($catImages);
        
        return [
            'image_name' => $cat[0],
        ];
    }
}
