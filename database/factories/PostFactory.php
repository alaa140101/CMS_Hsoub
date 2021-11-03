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
            'image_path' => 'uploads/'. $this->faker->image('public/storage/uploads', 600, 400, null, false),
            'title' => $this->faker->realText(50),
            'slug' => $this->faker->slug(),
            'body' => $this->faker->realText(200),
            'approved' => $this->faker->boolean(),
            'user_id' => rand(1, 10),
            'category_id' => rand(1, 5),
        ];
    }
}
