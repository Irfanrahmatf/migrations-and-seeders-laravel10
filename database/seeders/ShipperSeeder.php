<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShipperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shippers')->insert([
            [
                'CompanyName' => 'Shipper 1',
                'Phone' => '123456789',
            ],
            [
                'CompanyName' => 'Shipper 2',
                'Phone' => '987654321',
            ],
        ]);
    }
}
