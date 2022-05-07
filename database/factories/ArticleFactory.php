<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
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
            'short_description' => $this->faker->word(),
            'full_description' => $this->faker->word(),
            'image' => $this->faker->word(),
        ];
    }
}
