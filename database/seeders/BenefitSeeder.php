<?php

namespace Database\Seeders;

use App\Models\Benefit;
use Illuminate\Database\Seeder;

class BenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $benefits = [
            [
                'name' => 'Benefit-A Nike',
                'description' => '30% de descuento en compras de calzados',
                'country_of_benefit' => 'ARG',
                'brand_id' => 1,
            ],
            [
                'name' => 'Benefit-B Nike',
                'description' => 'Envío gratis en productos superiores a $50.000',
                'country_of_benefit' => 'ARG',
                'brand_id' => 1,
            ],
            [
                'name' => 'Benefit-A Apple',
                'description' => '10% en productos seleccionados',
                'country_of_benefit' => 'ARG',
                'brand_id' => 2,
            ],
            [
                'name' => 'Benefit-B Apple',
                'description' => 'Financiación 12 cuotas sin interés',
                'country_of_benefit' => 'ARG',
                'brand_id' => 2,
            ],
            [
                'name' => 'Benefit-A Samsung',
                'description' => '20% de reintegro en electrodomésticos',
                'country_of_benefit' => 'MEX',
                'brand_id' => 3,
            ],
            [
                'name' => 'Benefit-B Samsung',
                'description' => 'Accesorios gratis con tu compra',
                'country_of_benefit' => 'ARG',
                'brand_id' => 3,
            ],
            [
                'name' => 'Benefit-A Carrefour',
                'description' => 'Descuento del 25% en frutas y verduras los lunes',
                'country_of_benefit' => 'ARG',
                'brand_id' => 5,
            ],
            [
                'name' => 'Benefit-B Carrefour',
                'description' => '6 cuotas sin interés en electrodomésticos',
                'country_of_benefit' => 'ARG',
                'brand_id' => 5,
            ],
        ];

        foreach ($benefits as $benefit) {
            Benefit::create($benefit);
        }
    }
}
