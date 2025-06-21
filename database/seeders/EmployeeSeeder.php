<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $companies = Company::all();
        $users = User::all();
        foreach ($users as $user)
        {
            Employee::create(
                [
                    'first_name' => $faker->name,
                    'last_name' => $faker->lastName,
                    'date_of_birth' => $faker->dateTimeInInterval('-25 years', '+ 300 days'),
                    'company_id' => $companies->random()->id,
                    'user_id' =>$user->id,
                ]
            );
        }
    }
}
