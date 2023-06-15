<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'LastName' => 'Doe',
                'FirstName' => 'John',
                'Title' => 'Manager',
                'TitleOfCourtesy' => 'Mr.',
                'BirthDate' => '1990-01-01',
                'HireDate' => '2021-01-01',
                'Address' => '123 Main St',
                'City' => 'New York',
                'Region' => 'NY',
            ],
            [
                'LastName' => 'Smith',
                'FirstName' => 'Jane',
                'Title' => 'Sales Representative',
                'TitleOfCourtesy' => 'Ms.',
                'BirthDate' => '1992-05-15',
                'HireDate' => '2021-02-10',
                'Address' => '456 Elm St',
                'City' => 'Los Angeles',
                'Region' => 'CA',
            ],
            [
                'LastName' => 'Johnson',
                'FirstName' => 'Robert',
                'Title' => 'Developer',
                'TitleOfCourtesy' => 'Mr.',
                'BirthDate' => '1988-09-30',
                'HireDate' => '2021-03-20',
                'Address' => '789 Oak St',
                'City' => 'Chicago',
                'Region' => 'IL',
            ],
            [
                'LastName' => 'Williams',
                'FirstName' => 'Emily',
                'Title' => 'Accountant',
                'TitleOfCourtesy' => 'Ms.',
                'BirthDate' => '1991-07-12',
                'HireDate' => '2021-04-15',
                'Address' => '234 Maple St',
                'City' => 'Houston',
                'Region' => 'TX',
            ],
            [
                'LastName' => 'Brown',
                'FirstName' => 'Michael',
                'Title' => 'Technician',
                'TitleOfCourtesy' => 'Mr.',
                'BirthDate' => '1993-12-05',
                'HireDate' => '2021-05-05',
                'Address' => '567 Pine St',
                'City' => 'San Francisco',
                'Region' => 'CA',
            ],
        ]);
    }
}
