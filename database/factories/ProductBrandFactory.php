<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductBrand>
 */
class ProductBrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brands = [
            "Apple",
            "Samsung",
            "Nike",
            "Adidas",
            "Coca-Cola",
            "Microsoft",
            "Toyota",
            "Sony",
            "McDonald's",
            "H&M",
            "Pepsi",
            "Louis Vuitton",
            "BMW",
            "Mercedes-Benz",
            "Gucci",
            "IKEA",
            "Starbucks",
            "Nestlé",
            "AmazonBasics",
            "L'Oréal"
        ];

        $randomBrand = $this->faker->randomElement($brands);
        $uniqueSlug = Str::slug($randomBrand) . '-' . Str::random(5); // Append a random identifier

        return [
            'name' => $randomBrand,
            'slug' => $uniqueSlug,
            'slogan' => $this->faker->sentence(),
            'logo' => 'asset/img/demo.png',
            'status' => $this->faker->randomElement([0, 1]), // Generate either 0 or 1
        ];



    }
}
