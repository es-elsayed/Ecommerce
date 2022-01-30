<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_en'   => $this->faker->firstName,
            'name_ar'   =>  Faker::create('ar_JO')->firstName
        ];
    }
}
