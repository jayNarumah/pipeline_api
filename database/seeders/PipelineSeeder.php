<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PipelineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pipelines')->insert([
            [
                'pipeline_type_id' => 1,
                'company_id' => 1,
                'name' => 'Gas Pipeline from Kaduna to ibadan',
                'size' => 2.30,
                'start_lat' => 10.6093190000,
                'start_long' => 7.4295040000,
                'end_lat' => 6.4654220000,
                'end_long' => 3.4064480000,
            ],
            [
                'pipeline_type_id' => 2,
                'company_id' => 1,
                'name' => 'Petrol Pipeline from Borno to Lagos',
                'size' => 3.20,
                'start_lat' => 11.8333330000,
                'start_long' => 13.1500000000,
                'end_lat' => 6.4654220000,
                'end_long' => 3.4064480000,
            ],
            [
                'pipeline_type_id' => 2,
                'company_id' => 1,
                'name' => 'petrol Pipeline from abuja to sokoto',
                'size' => 3.20,
                'start_lat' => 9.0722640000,
                'start_long' => 7.4913020000,
                'end_lat' => 13.0058730000,
                'end_long' => 5.2475520000,
            ],
            [
                'pipeline_type_id' => 4,
                'company_id' => 6,
                'name' => 'Affinity Chemical PIpe from Kano to Osun',
                'size' => 3.20,
                'start_lat' => 12.0000000000,
                'start_long' => 8.5166670000,
                'end_lat' => 7.7533303200,
                'end_long' => 4.5513311000,
            ],
            [
                'pipeline_type_id' => 5,
                'company_id' => 5,
                'name' => 'MTN Pipe from Gusau to Lagos',
                'size' => 3.22,
                'start_lat' => 12.1702000000,
                'start_long' => 6.6641000000,
                'end_lat' => 6.4654220000,
                'end_long' => 3.4064480000,
            ],
            [
                'pipeline_type_id' => 5,
                'company_id' => 4,
                'name' => 'Airtel Cable from Lagos to KAatsina',
                'size' => 3.20,
                'start_lat' => 6.4654220000,
                'start_long' => 3.4064480000,
                'end_lat' => 12.9855310000,
                'end_long' => 7.6171440000,
            ],
        ]);

    }
}