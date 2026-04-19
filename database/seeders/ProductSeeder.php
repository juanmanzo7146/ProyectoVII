<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [

            // Ollas y Sartenes
            [
                'name' => 'Sartén Antiadherente 28cm',
                'description' => 'Sartén con recubrimiento antiadherente de alta calidad.',
                'price' => 599.00,
                'stock' => 25,
                'category_id' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Olla Express 6 Litros',
                'description' => 'Olla express de acero inoxidable.',
                'price' => 1299.00,
                'stock' => 15,
                'category_id' => 1,
                'is_active' => true,
            ],

            // Cuchillos
            [
                'name' => 'Juego de Cuchillos Profesional',
                'description' => 'Set de 6 cuchillos con soporte.',
                'price' => 899.00,
                'stock' => 20,
                'category_id' => 2,
                'is_active' => true,
            ],

            // Electrodomésticos
            [
                'name' => 'Licuadora 10 Velocidades',
                'description' => '600W con jarra de vidrio.',
                'price' => 1599.00,
                'stock' => 12,
                'category_id' => 3,
                'is_active' => true,
            ],

        ];

        foreach ($products as $product) {

            Product::updateOrCreate(
                ['name' => $product['name']], // evita duplicados
                $product
            );

        }
    }
}