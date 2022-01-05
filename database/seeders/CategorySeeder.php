<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->create([
            'name_en' => 'un-defined',
            'name_ar' =>  'غير معروف',
            'status' => 0,
            'is_parent' => 1,
            'image' => 'assets/images/notfound.jpg',
            'slug' => 'un-defined',
        ]);
        Category::factory(6)->create();
        Category::factory(10)->create([
            'is_parent' => 0,
            'parent_id' => rand(1, 6)
        ]);
    }
}
