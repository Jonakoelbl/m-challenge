<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\GiftCard;
use App\Models\GiftCardRedemption;
use App\Models\Variation;
use Illuminate\Database\Seeder;

class GiftCardRedemptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees =  Employee::all();
        $variations = Variation::all();
        $giftCards = GiftCard::all();

        foreach ($employees as $employee) {
            GiftCardRedemption::create([
                'employee_id' => $employee->id,
                'variation_id' => $variations->unique()->random()->id,
                'gift_card_id' => $giftCards->random()->id,
                'local_currency_cost' => random_int(50, 100),
                'local_currency_price' => random_int(80, 120),
                'credits_price' => random_int(30,100)
            ]);
        }
    }
}
