<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'ProductName' => 'Product 1',
                'SupplierID' => 1,
                'CategoryID' => 1,
                'QuantityPerUnit' => '10 units',
                'UnitPrice' => 9.99,
                'UnitsInStock' => 100,
                'UnitsOnOrder' => 20,
                'ReorderLevel' => 10,
                'Discontinued' => 0,
            ],
            [
                'ProductName' => 'Product 2',
                'SupplierID' => 2,
                'CategoryID' => 1,
                'QuantityPerUnit' => '5 units',
                'UnitPrice' => 19.99,
                'UnitsInStock' => 50,
                'UnitsOnOrder' => 10,
                'ReorderLevel' => 5,
                'Discontinued' => 0,
            ],
            [
                'ProductName' => 'Product 3',
                'SupplierID' => 1,
                'CategoryID' => 2,
                'QuantityPerUnit' => '8 units',
                'UnitPrice' => 14.99,
                'UnitsInStock' => 80,
                'UnitsOnOrder' => 15,
                'ReorderLevel' => 8,
                'Discontinued' => 0,
            ],
            [
                'ProductName' => 'Product 4',
                'SupplierID' => 3,
                'CategoryID' => 2,
                'QuantityPerUnit' => '12 units',
                'UnitPrice' => 24.99,
                'UnitsInStock' => 120,
                'UnitsOnOrder' => 30,
                'ReorderLevel' => 12,
                'Discontinued' => 0,
            ],
            [
                'ProductName' => 'Product 5',
                'SupplierID' => 1,
                'CategoryID' => 3,
                'QuantityPerUnit' => '15 units',
                'UnitPrice' => 29.99,
                'UnitsInStock' => 150,
                'UnitsOnOrder' => 25,
                'ReorderLevel' => 10,
                'Discontinued' => 0,
            ],
            [
                'ProductName' => 'Product 6',
                'SupplierID' => 2,
                'CategoryID' => 3,
                'QuantityPerUnit' => '20 units',
                'UnitPrice' => 34.99,
                'UnitsInStock' => 100,
                'UnitsOnOrder' => 15,
                'ReorderLevel' => 10,
                'Discontinued' => 0,
            ],
            [
                'ProductName' => 'Product 7',
                'SupplierID' => 3,
                'CategoryID' => 4,
                'QuantityPerUnit' => '10 units',
                'UnitPrice' => 9.99,
                'UnitsInStock' => 80,
                'UnitsOnOrder' => 20,
                'ReorderLevel' => 8,
                'Discontinued' => 0,
            ],
            [
                'ProductName' => 'Product 8',
                'SupplierID' => 1,
                'CategoryID' => 4,
                'QuantityPerUnit' => '8 units',
                'UnitPrice' => 14.99,
                'UnitsInStock' => 60,
                'UnitsOnOrder' => 10,
                'ReorderLevel' => 6,
                'Discontinued' => 0,
            ],
            [
                'ProductName' => 'Product 9',
                'SupplierID' => 2,
                'CategoryID' => 5,
                'QuantityPerUnit' => '6 units',
                'UnitPrice' => 19.99,
                'UnitsInStock' => 90,
                'UnitsOnOrder' => 15,
                'ReorderLevel' => 10,
                'Discontinued' => 0,
            ],
            [
                'ProductName' => 'Product 10',
                'SupplierID' => 3,
                'CategoryID' => 5,
                'QuantityPerUnit' => '10 units',
                'UnitPrice' => 24.99,
                'UnitsInStock' => 120,
                'UnitsOnOrder' => 25,
                'ReorderLevel' => 12,
                'Discontinued' => 0,
            ],
        ]);
    }
}
