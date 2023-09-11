<?php

namespace Database\Seeders;

use App\Models\BrandCategory;
use App\Models\ProductBrand;
use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ProductCategory::factory(5)->create();

        $brands = ProductBrand::pluck('id');

        foreach ($categories as $category) {
            $brandCategory = new BrandCategory();
            $brandCategory->product_category_id = $category->id;
            $brandCategory->product_brand_id = fake()->randomElement($brands);
            $brandCategory->save();
        }
    }
}
