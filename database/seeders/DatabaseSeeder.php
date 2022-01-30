<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Site;
use App\Models\Slider;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Slider::factory(6)->create();
        Brand::factory(6)->create();
        Site::factory()->create();
        $this->call([
            AdminSeeder::class,
            TagSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            RegionsSeeder::class,
            CitiesSeeder::class,
        ]);

    }
}
