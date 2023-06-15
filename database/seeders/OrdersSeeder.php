<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'CustomerID' => 1,
                'EmployeeID' => 1,
                'OrderDate' => '2023-01-01',
                'RequiredDate' => '2023-01-10',
                'ShippedDate' => '2023-01-05',
                'ShipVia' => 1,
                'Freight' => 10.99,
                'ShipName' => 'Customer 1',
                'ShipAddress' => 'Address 1',
                'ShipCity' => 'City 1',
                'ShipRegion' => 'Region 1',
                'ShipPostalCode' => '12345',
                'ShipCountry' => 'Country 1',
            ],
            [
                'CustomerID' => 2,
                'EmployeeID' => 2,
                'OrderDate' => '2023-01-02',
                'RequiredDate' => '2023-01-12',
                'ShippedDate' => '2023-01-06',
                'ShipVia' => 2,
                'Freight' => 15.99,
                'ShipName' => 'Customer 2',
                'ShipAddress' => 'Address 2',
                'ShipCity' => 'City 2',
                'ShipRegion' => 'Region 2',
                'ShipPostalCode' => '67890',
                'ShipCountry' => 'Country 2',
            ],
            [
                'CustomerID' => 1,
                'EmployeeID' => 3,
                'OrderDate' => '2023-01-03',
                'RequiredDate' => '2023-01-13',
                'ShippedDate' => '2023-01-07',
                'ShipVia' => 1,
                'Freight' => 12.99,
                'ShipName' => 'Customer 3',
                'ShipAddress' => 'Address 3',
                'ShipCity' => 'City 3',
                'ShipRegion' => 'Region 3',
                'ShipPostalCode' => '54321',
                'ShipCountry' => 'Country 3',
            ],
            [
                'CustomerID' => 3,
                'EmployeeID' => 1,
                'OrderDate' => '2023-01-04',
                'RequiredDate' => '2023-01-14',
                'ShippedDate' => '2023-01-08',
                'ShipVia' => 2,
                'Freight' => 9.99,
                'ShipName' => 'Customer 4',
                'ShipAddress' => 'Address 4',
                'ShipCity' => 'City 4',
                'ShipRegion' => 'Region 4',
                'ShipPostalCode' => '98765',
                'ShipCountry' => 'Country 4',
            ],
            [
                'CustomerID' => 2,
                'EmployeeID' => 2,
                'OrderDate' => '2023-01-05',
                'RequiredDate' => '2023-01-15',
                'ShippedDate' => '2023-01-09',
                'ShipVia' => 1,
                'Freight' => 14.99,
                'ShipName' => 'Customer 5',
                'ShipAddress' => 'Address 5',
                'ShipCity' => 'City 5',
                'ShipRegion' => 'Region 5',
                'ShipPostalCode' => '23456',
                'ShipCountry' => 'Country 5',
            ],
        ]);
    }
}
