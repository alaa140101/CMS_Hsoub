<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'avatar' => 'avatars/'. $this->faker->image('public/storage/avatars', 600, 400, null, false),
            'website' => $this->faker->url(),
            'bio' => $this->faker->realText(100),
            'user_id' => $this->faker->numberBetween(1,5),
        ];
    }
}
