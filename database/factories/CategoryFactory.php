<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $cat_en = $this->faker->name();
        $faker_ar = Faker::create('ar_JO');
        return [
            'name_en' => $cat_en,
            'name_ar' =>  $faker_ar->name(),
            'status' => rand(0,1) || rand(0,1) ? 1: 0,
            'is_parent' => 1,
            'image' => 'assets/images/notfound.jpg',
            'slug' => Str::slug($cat_en),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
