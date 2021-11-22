<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
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
        for ($i = 1; $i < 12; $i++) {
            $cat_en =  Faker::create()->name;
            Category::insert([
                'name_en' => $cat_en,
                'name_ar' =>  Faker::create('ar_JO')->name,
                'status' => rand(0,1) || rand(0,1) ? 1: 0,
                'is_parent' => 0,
                'image' => 'assets/site/images/categories/0'. $i .'.png',
                'slug' => Str::slug($cat_en),
                'parent_id' => rand(1,8)
            ]);
        }
    }
}
