<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Facades\Facade;
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
            'title' => fake()->sentence,
            'post_images' => fake()->imageUrl('900', '571'),
            'body' => fake()->paragraph,

        ];
    }
}
