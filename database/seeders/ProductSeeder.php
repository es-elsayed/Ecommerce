<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(23)->create();
        $categories = Category::all();
        Product::all()->each(function ($product) use ($categories) {
            $product->categories()->attach(
                $categories->random(2)->pluck('id')->toArray()
            );
        });
    }
}
