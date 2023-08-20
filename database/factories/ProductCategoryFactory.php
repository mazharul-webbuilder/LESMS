<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductCategory>
 */
class ProductCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->words(rand(1, 2), true),
            'slug' => $this->faker->unique()->slug(),
            'title' => $this->faker->words(rand(3, 5), true),
            'image' => 'asset/img/demo.png'
        ];
    }
}
