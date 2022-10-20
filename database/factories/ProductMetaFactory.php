<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

class ProductMetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => Product::factory()->create()->id,
            'max_price' => $this->faker->numberBetween(100, 1000),
            'stock_quantity' => $this->faker->randomDigit(),
        ];
    }
}