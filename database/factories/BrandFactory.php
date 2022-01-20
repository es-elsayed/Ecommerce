<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $i = 0;
        $name_en = $this->faker->sentence(2);
        $faker_ar = Faker::create('ar_JO');
        return [
            'name_en'   => $name_en,
            'name_ar'   =>  $faker_ar->company,
            'image'     => 'assets/site/images/brands/0' . rand(1, 15) . '.png',
            'title_en'  =>  $this->faker->sentence('2'),
            'title_ar'  =>  $faker_ar->company,
            'alt_en'    =>  $this->faker->sentence('2'),
            'alt_ar'    =>  $faker_ar->company,
            'slug'      => Str::slug($name_en),
            'status'    => $this->faker->numberBetween(0, 1) || $this->faker->numberBetween(0, 1) ? 1 : 0,
        ];
    }
}
