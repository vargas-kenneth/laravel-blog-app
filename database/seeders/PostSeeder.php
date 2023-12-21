<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostImage;
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
        // use when generating post without image
        // a problem will occur when generating a post without image and generating a PostImage to it
        // it cannot find a post that does not have any image and attach to it
        // Post::factory(10)->create();
        PostImage::factory(10)->create();
        // should add a default image to a when seeding a post
    }
}
