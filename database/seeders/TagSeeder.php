<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::factory()->create([
            'name_en' => 'men',
            'name_ar' => 'رجال'
        ]);
        Brand::factory()->create([
            'name_en' => 'women',
            'name_ar' => 'سيدات'
        ]);
        Brand::factory(6)->create();

    }
}
