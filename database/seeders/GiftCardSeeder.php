<?php

namespace Database\Seeders;

use App\Models\GiftCard;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GiftCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $startDate = now()->addYear();
        $endDate = $startDate->copy()->addMonths(6);

        for ($i = 1; $i <= 5; $i++) {
            GiftCard::create([
                'card_number' => $faker->unique()->randomNumber(8),
                'due_date' => $faker->dateTimeBetween($startDate, $endDate)->format('Y-m-d'),
                'security_code' => $faker->randomNumber(3)
            ]);
        }
    }
}
