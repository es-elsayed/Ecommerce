<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

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
            'name_ar'   =>  $faker_ar->sentence(2),
            'image'     => 'assets/site/images/brands/0' . rand(1, 15) . '.png',
            'title'     =>  $faker_ar->sentence(2),
            'alt'       =>  $faker_ar->sentence(2),
            'status'    => $this->faker->numberBetween(0, 1) || $this->faker->numberBetween(0, 1) ? 1 : 0,
        ];
    }
}
