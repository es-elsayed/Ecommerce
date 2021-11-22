<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create default main-category
        Category::insert([
            'name_en' => 'un-defined',
            'name_ar' =>  'غير معروف',
            'status' => 0,
            'is_parent' => 1,
            'image' => 'assets/images/notfound.jpg',
            'slug' => 'un-defined',
        ]);
        //create random main-categories
        \App\Models\Category::factory(10)->create();


        //create random sub-categories
        for ($i = 0; $i < 6; $i++) {
            $cat_en =  $this->faker->name();
            Category::insert([
                'name_en' => $cat_en,
                'name_ar' =>  Faker::create('ar_JO')->name,
                'status' => rand(0,1) || rand(0,1) ? 1: 0,
                'is_parent' => 0,
                'image' => 'assets/images/notfound.jpg',
                'slug' => Str::slug($cat_en),
                'parent_id' => rand(1,10)
            ]);
        }
    }
}
