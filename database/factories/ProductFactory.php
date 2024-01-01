<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"          => $this->faker->name(),
            "price"         => $this->faker->randomNumber(2) * 100000,
            "short_desc"    => $this->faker->sentence(6),
            "description"   => $this->faker->paragraph(2),
            "image"         => ['https://source.unsplash.com/random/640x640?minimalist,product' . rand(1, 10)],
        ];
    }
}
