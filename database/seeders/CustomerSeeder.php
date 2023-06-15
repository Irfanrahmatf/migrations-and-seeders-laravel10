<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'CustomerID' => 1,
                'CompanyName' => 'ABC Company',
                'ContactName' => 'John Doe',
                'ContactTitle' => 'Manager',
                'Address' => '123 Main St',
                'City' => 'New York',
                'Region' => 'NY',
                'PostalCode' => '10001',
            ],
            [
                'CustomerID' => 2,
                'CompanyName' => 'XYZ Corporation',
                'ContactName' => 'Jane Smith',
                'ContactTitle' => 'Sales Representative',
                'Address' => '456 Elm St',
                'City' => 'Los Angeles',
                'Region' => 'CA',
                'PostalCode' => '90001',
            ],
            [
                'CustomerID' => 3,
                'CompanyName' => 'PQR Ltd.',
                'ContactName' => 'Robert Johnson',
                'ContactTitle' => 'CEO',
                'Address' => '789 Oak St',
                'City' => 'Chicago',
                'Region' => 'IL',
                'PostalCode' => '60601',
            ],
            [
                'CustomerID' => 4,
                'CompanyName' => 'MNO Corporation',
                'ContactName' => 'Mary Johnson',
                'ContactTitle' => 'Marketing Manager',
                'Address' => '321 Elm St',
                'City' => 'San Francisco',
                'Region' => 'CA',
                'PostalCode' => '94101',
            ],
            [
                'CustomerID' => 5,
                'CompanyName' => 'EFG Company',
                'ContactName' => 'Michael Brown',
                'ContactTitle' => 'IT Manager',
                'Address' => '567 Pine St',
                'City' => 'Seattle',
                'Region' => 'WA',
                'PostalCode' => '98101',
            ],
        ]);
    }
}
