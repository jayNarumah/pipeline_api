<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('companies')->insert([
        [
            'name' => 'NNPC',
            'email' => 'nnpc@info.com',
            'phone_number' => '07066352344',
            'address' => 'Kaduna Nigeria',
            'color' => '#000000'
        ],
        [
            'name' => '9Mobile',
            'email' => '9mobile@info.net',
            'phone_number' => '08099999998',
            'address' => 'Apapa, Lagos Nigeria',
            'color' => '#000ff9'
        ],
        [
            'name' => 'MTN',
            'email' => 'mtn@info.net',
            'phone_number' => '08033333333',
            'address' => 'Apapa, Lagos Nigeria',
            'color' => '#000fa0'
        ],
        [
            'name' => 'Airtel Ng',
            'email' => 'airtel@info.net',
            'phone_number' => '09022222221',
            'address' => 'Lagos Nigeria',
            'color' => '#001770'
        ],
        [
            'name' => 'De Globe Internet Services',
            'email' => 'globe@internet.net',
            'phone_number' => '080353434312',
            'address' => 'No. 19, Enugu Street Abuja Nigeria',
            'color' => '#001f40',
        ],
        [
            'name' => 'Affinity Laboratory',
            'email' => 'affinity@demo.net',
            'phone_number' => '08066352332',
            'address' => 'No. 16 Lagos Nigeria',
            'color' => '#002710',
        ],
    ]);
    }
}