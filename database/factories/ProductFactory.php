<?php

namespace Database\Factories;

use App\Helpers\AdminHelper;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $productNames = [
            "EcoClean All-Purpose Cleaner",
            "Zenith Wireless Bluetooth Headphones",
            "LuxeLeather Handcrafted Wallet",
            "NatureGlow Organic Face Cream",
            "AquaWave Stainless Steel Water Bottle",
            "SwiftSlice Vegetable Chopper",
            "NovaTech Smart Home Thermostat",
            "MoonlitDreams Aromatherapy Diffuser",
            "FlexiFit Yoga Mat",
            "GourmetGusto Spice Collection",
            "SolarBloom Outdoor Solar Lights",
            "EverLasting Rose Bouquet",
            "TranquilTunes Sleep Headphones",
            "SculptSure Fitness Resistance Bands",
            "PureHarvest Bamboo Cutting Board",
            "SwiftSpin Salad Spinner",
            "UrbanHiker Adventure Backpack",
            "NourishYou Meal Prep Containers",
            "InfinityGlow LED Makeup Mirror",
            "EchoStream Portable Bluetooth Speaker",
            "NeoChic Minimalist Watch",
            "SereneScape Desktop Zen Garden",
            "CulinaryCrafts Chef's Knife Set",
            "BloomBud Flower Vase Collection",
            "MightyCharge Portable Power Bank",
            "StellarView Telescope Kit",
            "RapidBrew Coffee Maker",
            "GloSoft Makeup Brushes Set",
            "TranquilOasis Stress Relief Candle",
            "HarmonyBreeze Air Purifier",
            "EcoStride Reusable Shopping Bags",
            "SleekWrite Fountain Pen Set",
            "ElevateDesk Adjustable Standing Desk",
            "CosmicCrisp Apples",
            "NovaLuxe Starry Night Blanket",
            "CafeMingle Gourmet Coffee Blend",
            "ZenPet Calming Pet Bed",
            "UrbanaGrow Indoor Herb Garden",
            "SolarScape Solar-Powered Charger",
            "VelvetGlow Skincare Mask",
            "BlissfulBite Healthy Snack Box",
            "EchoRise Smart Alarm Clock",
            "ArtisanAura Hand-Painted Mugs",
            "TranquilPaws Pet Massager",
            "PureZen Yoga and Meditation Kit",
            "SereneShade UV-Protective Sunglasses",
            "TerraTrek Camping Hammock",
            "RusticRoots Farm Fresh Eggs",
            "MarineBreeze Beach Towel Collection",
            "LushLawn Garden Fertilizer",
            "UrbanPulse City Bike",
            "VividVision Virtual Reality Headset",
            "WellnessWave Fitness Tracker",
            "CasaCulinaria Recipe Book",
            "EcoPod Biodegradable Dish Soap",
            "SerenityCove Coastal Wall Art",
            "PawsitiveTrail Dog Leash",
            "AquaPetal Spa Bath Bombs",
            "RoamRight Travel Backpack",
            "EquiFlex Stretching Band",
            "EvergreenScent Essential Oils Set",
            "SymphonySounds Wireless Earbuds",
            "TruGrip Non-Slip Yoga Towel",
        ];

        $randomProduct = $this->faker->randomElement($productNames);
        $uniqueSlug = Str::slug($randomProduct) . '-' . Str::random(5);

        return [
            'name' => $this->faker->unique()->randomElement($productNames),
            'slug' => $uniqueSlug,
            'product_code' => AdminHelper::generateUniqueCode(),
            'short_description' => $this->faker->sentence(6),
            'description' => $this->faker->text(200),
            'thumbnail_image' => 'asset/img/demo-product.jpg',
            'previous_price' => $this->faker->randomFloat(2, 10, 100),
            'current_price' => $this->faker->randomFloat(2, 5, 50),
            'purchase_price' => $this->faker->randomFloat(2, 3, 30),
            'privacy_policy' => $this->faker->text(150),
            'return_policy' => $this->faker->text(150),
            'status' => $this->faker->numberBetween(0, 1),
            'flash_deal' => $this->faker->numberBetween(0, 1),
            'featured' => $this->faker->numberBetween(0, 1),
            'best_sale' => $this->faker->numberBetween(0, 1),
            'trending' => $this->faker->numberBetween(0, 1),
            'recent_product' => $this->faker->numberBetween(0, 1),
            'seo' => $this->faker->numberBetween(0, 1),
        ];
    }
}
