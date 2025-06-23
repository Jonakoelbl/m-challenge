<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CountriesSeeder::class,
            CompanySeeder::class,
            UserSeeder::class,
            EmployeeSeeder::class,
            BrandSeeder::class,
            GiftCardSeeder::class,
            BenefitSeeder::class,
            VariationSeeder::class,
            GiftCardRedemptionSeeder::class
        ]);
    }
}
