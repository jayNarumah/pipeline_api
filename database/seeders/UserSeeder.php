<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Abduljawad Ibrahim',
            'password' => '$2y$10$ohD6JiFQ3dP14y2B92Z6YexbzoqnnrySe02QTXgy/LvZZ6ttTajKO',
            'email' => 'century@demo.com',
        ]);
    }
}