<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
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
        // Slider::factory(6)->create();
        $this->call([
            // AdminSeeder::class,
            // CategorySeeder::class,
            ProductSeeder::class,
            // RegionsSeeder::class,
            // CitiesSeeder::class,
        ]);

    }
}
