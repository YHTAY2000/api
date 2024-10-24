<?php

namespace Database\Factories\model;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'detail' => $this->faker->paragraph,
            'price'=> $this->faker->numberBetween(100,1000),
            'stock'=> $this->faker->randomDigit,
            'discount'=> $this->faker->numberBetween(2,30)
        ];
    }
}