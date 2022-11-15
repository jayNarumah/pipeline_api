<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PipelineTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pipeline_types')->insert([
            ['name' => 'Gas Pipeline'],
            ['name' => 'Petrol Pipeline'],
            ['name' => 'Kerosine Pipeline'],
            ['name' => 'Chemical Products Pipe'],
            ['name' => 'Fiber Optic Cable'],
            ['name' => 'Water Pipe']
        ]);

    }
}