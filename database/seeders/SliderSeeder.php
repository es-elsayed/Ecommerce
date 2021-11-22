<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class SliderSeeder extends Seeder
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
        for ($i = 1; $i < 6; $i++) {
            Slider::insert([
                'image' => 'assets/site/images/slider/0'. $i .'.png',
                'title_en' => $faker_en->name,
                'title_ar' =>  $faker_ar->name,
                'description_en' => $faker_en->realText('30'),
                'description_ar' =>  $faker_ar->realText('30'),
                'link' =>  '',
                'status' => rand(0,1) || rand(0,1) ? 1: 0,
            ]);
        }
    }
}
