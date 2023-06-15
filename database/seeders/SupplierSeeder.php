<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suppliers')->insert([
            [
                'CompanyName' => 'Supplier 1',
                'ContactName' => 'John Doe',
                'ContactTitle' => 'Manager',
                'Address' => '123 Main St',
                'City' => 'New York',
                'Region' => 'NY',
                'PostalCode' => '10001',
            ],
            [
                'CompanyName' => 'Supplier 2',
                'ContactName' => 'Jane Smith',
                'ContactTitle' => 'Sales Representative',
                'Address' => '456 Elm St',
                'City' => 'Los Angeles',
                'Region' => 'CA',
                'PostalCode' => '90001',
            ],
            [
                'CompanyName' => 'Supplier 3',
                'ContactName' => 'Robert Johnson',
                'ContactTitle' => 'CEO',
                'Address' => '789 Oak St',
                'City' => 'Chicago',
                'Region' => 'IL',
                'PostalCode' => '60601',
            ],
            [
                'CompanyName' => 'Supplier 4',
                'ContactName' => 'Michael Brown',
                'ContactTitle' => 'Marketing Manager',
                'Address' => '321 Elm St',
                'City' => 'San Francisco',
                'Region' => 'CA',
                'PostalCode' => '94101',
            ],
            [
                'CompanyName' => 'Supplier 5',
                'ContactName' => 'Laura Johnson',
                'ContactTitle' => 'Account Manager',
                'Address' => '567 Pine St',
                'City' => 'Seattle',
                'Region' => 'WA',
                'PostalCode' => '98101',
            ],
        ]);
    }
}
