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
            "EcoGlow Desk Lamp",
            "AquaFusion Water Bottle",
            "ZenMist Aromatherapy Diffuser",
            "TechNova Wireless Earbuds",
            "LuxeVogue Leather Wallet",
            "PureCrest Bamboo Toothbrush",
            "NovaFlex Fitness Resistance Bands",
            "ChromaGlide Art Brush Set",
            "NatureSpire Hiking Backpack",
            "GourmetPalate Spice Rack",
            "SolarBloom Garden Lights",
            "UrbanPulse Smart Watch",
            "CosmicCurve Yoga Mat",
            "VitaSip Nutrient Blender",
            "NovaGrip Phone Mount",
            "EcoSwift Reusable Grocery Bags",
            "SerenityBliss Meditation Cushion",
            "LumiEssence Facial Serum",
            "AdventureQuest Camping Hammock",
            "CulinaryCraft Chef's Knife Set",
            "PixelGaze VR Headset",
            "HarmonyBeat Wireless Speaker",
            "NaturaChic Makeup Brushes",
            "SustainaWear Organic T-Shirt",
            "HerbMist Kitchen Herb Garden",
            "SkyLuxe Travel Pillow",
            "TimeWarden Hourglass",
            "NovaRise Morning Alarm Clock",
            "EquiStride Fitness Tracker",
            "BioBloom Plant Fertilizer",
            "QuirkWorks Board Game Collection",
            "ChocoFusion Chocolate Fondue Set",
            "BrewMasters Coffee Grinder",
            "CosmicJewel Constellation Necklace",
            "UrbanaCruise City Bike",
            "VerdeHaven Indoor Plant Stand",
            "VitaBloom Flower Arrangement Kit",
            "LushPetal Spa Gift Set",
            "TranquilEscape Sleep Mask",
            "SoleSprint Running Shoes",
            "PixelPort Camera Backpack",
            "LuxeHaven Egyptian Cotton Sheets",
            "ChromaCraft Acrylic Paint Set",
            "EcoSavor Bamboo Utensil Set",
            "SwiftWave Portable Charger",
            "FlavorFest Tea Sampler",
            "HeritageGlow Family Photo Frame",
            "GlideTech Luggage Set",
            "RetroScape Record Player",
            "NovaRise Sunrise Simulation Lamp",
            "ArtisanFlame Scented Candles"
        ];

        $randomProduct = $this->faker->randomElement($productNames);
        $uniqueSlug = Str::slug($randomProduct) . '-' . Str::random(5);

        return [
            'name' => $randomProduct,
            'slug' => $uniqueSlug,
            'product_code' => AdminHelper::generateUniqueCode(),
            'short_description' => $this->faker->sentence(6),
            'description' => $this->faker->text(200),
            'thumbnail_image' => 'asset/img/demo.png',
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
