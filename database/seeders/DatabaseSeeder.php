<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::factory(10)->create();
        Category::factory(4)->create();
        for ($i = 1; $i <= 10; $i++) { 
            Product::find($i)->categories()->attach([rand(0, 1), rand(2, 3)]);
        }
        Review::factory(20)->create();
        for ($i = 1; $i <= 3; $i++) { 
            Banner::factory(1)->create();
        }
    }
}
