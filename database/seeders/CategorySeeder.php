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
        $faker_en = Faker::create();
        $faker_ar = Faker::create('ar_JO');
        for ($i = 0; $i < 6; $i++) {
            $cat_en =  Str::random(4)." ".Str::random(3);
            Category::insert([
                'name_en' => $faker_en->city,
                'name_ar' =>  $faker_ar->name,
                'status' => rand(0,1) || rand(0,1) ? 1: 0,
                'is_parent' => 0,
                'image' => 'assets/images/notfound.jpg',
                'slug' => $faker_en->unique()->slug,
                'parent_id' => rand(1,10)
            ]);
        }
    }
}
