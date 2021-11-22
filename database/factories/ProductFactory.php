<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

use Faker\Factory as Faker;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Product::class;

    public function definition()
    {
        $productSuffixes = ['White Regular Fit Polo T-Shirt','Green Regular Fit Polo T-Shirt','Blue Regular Fit Polo T-Shirt','Fancy Red Sneakers','Fancy Yellow Sneakers','Fancy Black Sneakers','Fancy Blue Sneakers','Fancy Green Sneakers','Yellow Shine Blazer','Black Shine Blazer','Red Shine Blazer','Blue Shine Blazer','Men Black Hat Cap','Men Red Hat Cap','Men White Hat Cap','Men Yellow Hat Cap'];
        $name_en       = $this->faker->company.' '. Arr::random($productSuffixes);
        $faker_ar   = Faker::create('ar_JO');
        return [
            'name_en'           => $name_en,
            'name_ar'           => $faker_ar->name(),
            'description_en'    => $this->faker->realText('191'),
            'description_ar'    => $faker_ar->realText('191'),
            'sku'               => $this->faker->unique()->numberBetween(0,99999999999),
            'details_en'        => $this->faker->realText('30'),
            'details_ar'        => $faker_ar->realText('30'),
            'price'             => $this->faker->numberBetween(1000,10000),
            'sale_price'        => $this->faker->numberBetween(100,1000),
            'status'            => rand(0,1) || rand(0,1) ? 1: 0,
            'slug'              => Str::slug($name_en),
            'quantity'          => $this->faker->numberBetween(15,60),
            'main_image'        => upload_image('product',''),
        ];
    }
}
