<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image_path' => 'uploads/'. $this->faker->image('public/storage/uploads', 800, 600, null, false),
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'body' => $this->faker->realText(),
            'approved' => $this->faker->boolean(),
            'user_id' => $this->faker->numberBetween(1, 100),
            'category_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
