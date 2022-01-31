<?php

namespace Database\Seeders;

use App\Models\Tag;
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
        Tag::factory()->create([
            'name_en' => 'men',
            'name_ar' => 'رجال'
        ]);
        Tag::factory()->create([
            'name_en' => 'women',
            'name_ar' => 'سيدات'
        ]);
        Tag::factory(6)->create();

    }
}
