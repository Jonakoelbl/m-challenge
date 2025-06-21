<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            ['iso_3' => 'USA', 'name' => 'United States'],
            ['iso_3' => 'BRA', 'name' => 'Brazil'],
            ['iso_3' => 'MEX', 'name' => 'Mexico'],
            ['iso_3' => 'ARG', 'name' => 'Argentina'],
            ['iso_3' => 'CAN', 'name' => 'Canada'],
            ['iso_3' => 'DEU', 'name' => 'Germany'],
            ['iso_3' => 'FRA', 'name' => 'France'],
            ['iso_3' => 'GBR', 'name' => 'United Kingdom'],
            ['iso_3' => 'CHN', 'name' => 'China'],
            ['iso_3' => 'JPN', 'name' => 'Japan'],
        ]);
    }
}
