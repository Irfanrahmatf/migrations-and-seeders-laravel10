<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_details')->insert([
            [
                'ProductID' => 1,
                'UnitPrice' => 10.99,
                'Quantity' => 5,
                'Discount' => 0.1,
            ],
            [
                'ProductID' => 2,
                'UnitPrice' => 19.99,
                'Quantity' => 3,
                'Discount' => 0.05,
            ],
            // Tambahkan data order detail lainnya di sini
        ]);

        // Generate 18 random order details
        for ($i = 3; $i <= 20; $i++) {
            DB::table('order_details')->insert([
                'ProductID' => $i,
                'UnitPrice' => rand(5, 50),
                'Quantity' => rand(1, 10),
                'Discount' => rand(0, 50) / 100,
            ]);
        }
    }
}
