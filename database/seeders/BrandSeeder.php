<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Nike',
                'description' => 'Calzados e indumentaria deportiva',
            ],
            [
                'name' => 'Apple',
                'description' => 'Tecnología e innovación en dispositivos móviles',
            ],
            [
                'name' => 'Samsung',
                'description' => 'Electrodomésticos y tecnología de consumo',
            ],
            [
                'name' => 'Adidas',
                'description' => 'Ropa deportiva y calzado',
            ],
            [
                'name' => 'Carrefour',
                'description' => 'Supermercado con presencia internacional',
            ],
            [
                'name' => 'McDonald\'s',
                'description' => 'Comida rápida y hamburguesas',
            ],
            [
                'name' => 'Sony',
                'description' => 'Tecnología, entretenimiento y electrónica',
            ],
            [
                'name' => 'Despegar',
                'description' => 'Agencia de viajes y reservas turísticas online',
            ],
            [
                'name' => 'Osde',
                'description' => 'Servicios de salud y medicina prepaga',
            ]
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}
