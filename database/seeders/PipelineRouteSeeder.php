<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PipelineRouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pipeline_routes')->insert([
            [
                'pipeline_id' => 1,
                'lat' => 10.6093190000,
                'long'=> 9.9988000000,
            ],
            [
                'pipeline_id' => 1,
                'lat' => 9.9988000000,
                'long'=> 7.0295040000,
            ],
            [
                'pipeline_id' => 1,
                'lat' => 8.9999000000,
                'long'=> 7.4295040000,
            ],
            [
                'pipeline_id' => 1,
                'lat' => 6.8888800000,
                'long'=> 4.233300000,
            ],
            [
                'pipeline_id' => 1,
                'lat' => 6.4654220000,
                'long'=> 3.4064480000,
            ],
            [
                'pipeline_id' => 2,
                'lat' => 11.8333330000,
                'long'=> 13.1500000000,
            ],
            [
                'pipeline_id' => 2,
                'lat' => 10.8777300000,
                'long'=> 13.1500000000,
            ],
            [
                'pipeline_id' => 2,
                'lat' => 9.2333400000,
                'long'=> 9.0887770000,
            ],
            [
                'pipeline_id' => 2,
                'lat' => 7.9877700000,
                'long'=> 6.8999000000,
            ],
            [
                'pipeline_id' => 2,
                'lat' => 6.4654220000,
                'long'=> 3.4064480000,
            ],
            [
                'pipeline_id' => 3,
                'lat' => 9.0722640000,
                'long'=> 7.4913020000,
            ],
            [
                'pipeline_id' => 3,
                'lat' => 10.7888000000,
                'long'=> 7.4913020000,
            ],
            [
                'pipeline_id' => 3,
                'lat' => 12.8999780000,
                'long'=> 6.9877660000,
            ],
            [
                'pipeline_id' => 3,
                'lat' => 13.0058730000,
                'long'=> 5.2475520000,
            ],
            [
                'pipeline_id' => 4,
                'lat' => 12.0000000000,
                'long'=> 8.5166670000,
            ],
            [
                'pipeline_id' => 4,
                'lat' => 10.3232300000,
                'long'=> 8.5166670000,
            ],
            [
                'pipeline_id' => 4,
                'lat' => 9.3252343000,
                'long'=> 7.9888400000,
            ],
            [
                'pipeline_id' => 4,
                'lat' => 8.5166670000,
                'long'=> 4.5513311000,
            ],
            [
                'pipeline_id' => 5,
                'lat' => 12.1702000000,
                'long'=> 6.6641000000,
            ],
            [
                'pipeline_id' => 5,
                'lat' => 10.3444400000,
                'long'=> 5.5554430000,
            ],
            [
                'pipeline_id' => 5,
                'lat' => 9.9887700000,
                'long'=> 5.9887000000,
            ],
            [
                'pipeline_id' => 5,
                'lat' => 7.9777700000,
                'long'=> 4.7788800000,
            ],
            [
                'pipeline_id' => 5,
                'lat' => 6.4654220000,
                'long'=> 3.4064480000,
            ],
            [
                'pipeline_id' => 6,
                'lat' => 6.4654220000,
                'long'=> 3.4064480000,
            ],
            [
                'pipeline_id' => 6,
                'lat' => 8.9934550000,
                'long'=> 5.3323400000,
            ],
        ]);

    }
}