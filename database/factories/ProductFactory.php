<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name_en = $this->faker->sentence(2);
        $faker_ar   = Faker::create('ar_JO');
        return [
            'name_en'           => $name_en,
            'name_ar'           => $faker_ar->company,
            'description_en'    => $this->faker->realText('391'),
            'description_ar'    => $faker_ar->realText('391'),
            'sku'               => $this->faker->unique()->numberBetween(0,99999999999),
            'details_en'        => $this->faker->realText('130'),
            'details_ar'        => $faker_ar->realText('130'),
            'price'             => $this->faker->numberBetween(100,100000),
            'sale_price'        => $this->faker->numberBetween(10,1000),
            'sale'              => $this->faker->boolean(50),
            'featured'          => $this->faker->boolean(40),
            'status'            => $this->faker->boolean(75),
            'slug'              => Str::slug($name_en),
            'quantity'          => $this->faker->numberBetween(15,60),
            'brand_id'          => $this->faker->numberBetween(1,6),
            'main_image'        => 'assets/site/images/products/0' . $this->faker->numberBetween(1,23) . '.png',
        ];
    }
}
