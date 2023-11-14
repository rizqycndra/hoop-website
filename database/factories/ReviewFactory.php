<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
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
            "text"          => $this->faker->paragraph(1),
            "rating"        => rand(1, 5),
            "product_id"    => rand(1, 9)
        ];
    }
}