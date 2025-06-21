<?php

namespace Database\Seeders;

use App\Models\Benefit;
use App\Models\Variation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VariationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $benefits = Benefit::all();
        foreach ($benefits as $benefit) {
            $currencyValue = random_int(60, 200);
            Variation::create([
                'benefit_id' => $benefit->id,
                'title' => 'Variation for'.$benefit->name,
                'local_currency_cost' => $currencyValue,
                'local_currency_price' => $currencyValue + random_int(50, 100),
                'credits_price' => random_int(10, 30),
            ]);
        }
    }
}
