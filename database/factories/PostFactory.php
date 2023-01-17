<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => factory(User::class),
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'posts_images' => $this->faker->imageUrl('900', '570'),
            // 'published_at' => $this->faker->dateTime
        ];
    }
}