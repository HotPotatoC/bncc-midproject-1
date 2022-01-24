<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'author' => $this->faker->firstName(),
            'pages' => $this->faker->randomNumber(),
            'release_year' => $this->faker->numberBetween(2000, 2021)
        ];
    }
}
