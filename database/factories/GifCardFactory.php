<?php

namespace Database\Factories;

use App\Models\GiftCard;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GifCardFactory extends Factory
{
    protected $model = GiftCard::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = now()->addYear();
        $endDate = $startDate->copy()->addMonths(random_int(3, 9));

        return [
            'card_number' => $this->faker->unique()->randomNumber(8),
            'due_date' => $this->faker->dateTimeBetween($startDate, $endDate)->format('Y-m-d'),
            'security_code' => $this->faker->randomNumber(3),
        ];
    }
}
