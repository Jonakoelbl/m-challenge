<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companiesData = [
            ['legal_name' => 'Maslow', 'billing_address' => 'Calle Falsa 123'],
            ['legal_name' => 'Santander', 'billing_address' => 'Address Somewhere'],
            ['legal_name' => 'BBVA', 'billing_address' => 'Address IdunnoKnow'],
        ];

        foreach ($companiesData as $companyData) {
            Company::create($companyData);
        }
    }
}
