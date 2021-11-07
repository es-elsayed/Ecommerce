<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 6; $i++) {
            $cat_en = Str::random(3)." ".Str::random(4);
            Category::insert([
                'name_en' => $cat_en,
                'name_ar' =>  Str::random(3)." ".Str::random(3),
                'is_active' => rand(0,1)? '1': '0',
                'is_parent' => '1',
                'image' => 'assets/images/notfound.jpg',
                'slug' => str_slug($cat_en),
            ]);
        }
        for ($i = 0; $i < 6; $i++) {
            $cat_en =  Str::random(4)." ".Str::random(3);
            Category::insert([
                'name_en' => $cat_en,
                'name_ar' =>  Str::random(3)." ".Str::random(3),
                'is_active' => rand(0,1)? '1': '0',
                'is_parent' => '0',
                'image' => 'assets/images/notfound.jpg',
                'slug' => str_slug($cat_en),
                'parent_id' => rand(0,6)
            ]);
        }
    }
}
