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
            'title' => $this->faker->title,
            'content' => $this->faker->text,
            'tags' => $this->faker->word,
            'user_id' => $this->faker->randomDigitNotNull(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
