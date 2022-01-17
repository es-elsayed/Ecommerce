<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456789'),
        ]);
        User::insert([
            'f_name' => 'Islam',
            'l_name' => 'Abdu',
            'email' => 'islam@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}
