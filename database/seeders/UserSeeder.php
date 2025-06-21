<?php

namespace Database\Seeders;

use App\Enums\Roles;
use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Maslow Administrator',
            'email' => 'maslow_admin@test.com',
            'password' => Hash::make('password'),
            'role' => Roles::MASLOW_ADMIN->value,
        ]);

        $companies = Company::all();
        foreach ($companies as $company) {
            User::create([
                'name' => $company->legal_name. ' Administrator',
                'email' => $company->legal_name.'_admin@test.com',
                'password' => Hash::make('password'),
                'role' => Roles::COMPANY_ADMIN->value,
            ]);
        }

        for ($i = 1; $i <= 6; $i++) {
            User::create([
                'name' => 'Company Employee ' . $i,
                'email' => 'company_employee' . $i . '@test.com',
                'password' => Hash::make('rootroot'),
                'role' => 'company_employee',
            ]);
        }
    }
}
