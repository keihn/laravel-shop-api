<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'product_desc' => $this->faker->paragraph($nbSentences = 4, $variableNbSentences = true),
            'product_excerpt' => $this->faker->paragraph($nbSentences = 2, $variableNbSentences = true),
            'image' => $this->faker->imageUrl(640, 480,),
            'status' => $this->faker->word('published')
        ];
    }
}