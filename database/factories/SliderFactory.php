<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class SliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker_ar = Faker::create('ar_JO');
        return [
            'image' => 'assets/site/images/slider/0'. $this->faker->unique()->numberBetween(1,5) .'.png',
                'title_en' =>$this->faker->sentence(8),
                'title_ar' =>  $faker_ar->sentence(8),
                'description_en' => $this->faker->realText('30'),
                'description_ar' =>  $faker_ar->realText('30'),
                'link' =>  '',
                'status' => rand(0,1) || rand(0,1) ? 1: 0,
        ];
    }
}
