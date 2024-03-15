<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'date' => $this->faker->sentence,
            'title' => $this->faker->company,
            'description' => $this->faker->sentence,
            'rating' => $this->faker->numberBetween($min = 0, $max = 5),
        ];
    }
}
