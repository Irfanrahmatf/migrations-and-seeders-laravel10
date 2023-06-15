<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'CategoriesName' => 'Category 1',
                'Description' => 'Description of Category 1',
                'Picture' => 'path/to/picture1.jpg',
            ],
            [
                'CategoriesName' => 'Category 2',
                'Description' => 'Description of Category 2',
                'Picture' => 'path/to/picture2.jpg',
            ],
            [
                'CategoriesName' => 'Category 3',
                'Description' => 'Description of Category 3',
                'Picture' => 'path/to/picture3.jpg',
            ],
        ]);
    }
}
