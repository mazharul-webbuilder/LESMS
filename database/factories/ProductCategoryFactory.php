<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $categoreis = [
            "Electronics",
            "Apparel",
            "Footwear",
            "Beverages",
            "Food",
            "Cosmetics",
            "Automotive",
            "Furniture",
            "Home Decor",
            "Sports",
            "Outdoor",
            "Toys",
            "Books",
            "Music",
            "Movies",
            "Health",
            "Fitness",
            "Beauty",
            "Jewelry",
            "Watches",
            "Accessories",
            "Tools",
            "Gardening",
            "Pet Supplies",
            "Baby",
            "Kids",
            "Office Supplies",
            "Electrical",
            "Appliances",
            "Groceries",
            "Kitchen",
            "Cookware",
            "Stationery",
            "Crafts",
            "Travel",
            "Luggage",
            "Footwear",
            "Bags",
            "Fashion",
            "Eyewear",
            "Gaming",
            "Tech Gadgets",
            "Home Improvement",
            "Art",
            "Collectibles",
            "Hobbies",
            "Electricals",
            "Gifts",
            "Party Supplies"
        ];
        $randomCategory = $this->faker->randomElement($categoreis);
        $uniqueSlug = Str::slug($randomCategory) . '-' . Str::random(5);
        return [
            'name' => $randomCategory,
            'slug' => $uniqueSlug,
            'title' => $this->faker->words(rand(3, 5), true),
            'image' => 'asset/img/demo.png',
            'status' => $this->faker->randomElement([0, 1]),
        ];
    }
}
