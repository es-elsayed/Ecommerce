<?php

namespace Database\Seeders;

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
        $faker_en = Faker::create();
        $faker_ar = Faker::create('ar_JO');

        $productSuffixes = ['White Regular Fit Polo T-Shirt', 'Green Regular Fit Polo T-Shirt', 'Blue Regular Fit Polo T-Shirt', 'Fancy Red Sneakers', 'Fancy Yellow Sneakers', 'Fancy Black Sneakers', 'Fancy Blue Sneakers', 'Fancy Green Sneakers', 'Yellow Shine Blazer', 'Black Shine Blazer', 'Red Shine Blazer', 'Blue Shine Blazer', 'Men Black Hat Cap', 'Men Red Hat Cap', 'Men White Hat Cap', 'Men Yellow Hat Cap'];
        $name_en       =  Arr::random($productSuffixes);
        for ($i = 1; $i < 23; $i++) {
            Product::create([
                'name_en'           => $name_en,
                'name_ar'           => $faker_ar->name(),
                'description_en'    => $faker_en->realText('191'),
                'description_ar'    => $faker_ar->realText('191'),
                'sku'               => $faker_en->unique()->numberBetween(0, 99999999999),
                'details_en'        => $faker_en->realText('30'),
                'details_ar'        => $faker_ar->realText('30'),
                'price'             => $faker_en->numberBetween(1000, 10000),
                'sale_price'        => $faker_en->numberBetween(100, 1000),
                'status'            => rand(0, 1) || rand(0, 1) ? 1 : 0,
                'slug'              => $faker_en->unique()->slug(),
                'quantity'          => $faker_en->numberBetween(15, 60),
                'main_image'        => 'assets/site/images/products/0' . $i . '.png',
            ]);
        }
    }
}
