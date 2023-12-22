<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $wordCount = fake()->numberBetween(1, 2);
        $tag = $wordCount === 1 ? fake()->word : fake()->sentence($wordCount, true);
        $tagName = str_replace(' ', '', ucwords($tag));

        return [
            'tag_name' => $tagName,
        ];
    }
}
