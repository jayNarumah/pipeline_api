<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PipelineRoute;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PipelineTypeSeeder::class,
            CompanySeeder::class,
            PipelineSeeder::class,
            PipelineRouteSeeder::class,
            // PipelineSeeder::class,
            // PipelineRouteSeeder::class,
            UserSeeder::class,
        ]);
    }
}