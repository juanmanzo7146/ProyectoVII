<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // Ollas y Sartenes (category_id: 1)
            [
                'name' => 'Sartén Antiadherente 28cm',
                'description' => 'Sartén con recubrimiento antiadherente de alta calidad. Apta para todo tipo de cocinas.',
                'price' => 599.00,
                'stock' => 25,
                'category_id' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Olla Express 6 Litros',
                'description' => 'Olla express de acero inoxidable, perfecta para cocinar rápido y conservar nutrientes.',
                'price' => 1299.00,
                'stock' => 15,
                'category_id' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Juego de Ollas 5 Piezas',
                'description' => 'Set completo de ollas de diferentes tamaños con tapas de vidrio templado.',
                'price' => 2499.00,
                'stock' => 10,
                'category_id' => 1,
                'is_active' => true,
            ],
            
            // Cuchillos y Tablas (category_id: 2)
            [
                'name' => 'Juego de Cuchillos Profesional',
                'description' => 'Set de 6 cuchillos de acero inoxidable con soporte de madera.',
                'price' => 899.00,
                'stock' => 20,
                'category_id' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Tabla para Picar Bambú',
                'description' => 'Tabla grande de bambú ecológico, resistente y duradera.',
                'price' => 299.00,
                'stock' => 35,
                'category_id' => 2,
                'is_active' => true,
            ],
            
            // Electrodomésticos (category_id: 3)
            [
                'name' => 'Licuadora 10 Velocidades',
                'description' => 'Licuadora potente de 600W con jarra de vidrio de 1.5L.',
                'price' => 1599.00,
                'stock' => 12,
                'category_id' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Batidora de Mano',
                'description' => 'Batidora de inmersión con 5 velocidades y accesorios.',
                'price' => 799.00,
                'stock' => 18,
                'category_id' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Cafetera Express',
                'description' => 'Cafetera para espresso y cappuccino con vaporizador.',
                'price' => 2999.00,
                'stock' => 8,
                'category_id' => 3,
                'is_active' => true,
            ],
            
            // Repostería (category_id: 4)
            [
                'name' => 'Moldes para Cupcakes x12',
                'description' => 'Molde antiadherente para 12 cupcakes o muffins.',
                'price' => 199.00,
                'stock' => 40,
                'category_id' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Rodillo de Amasar',
                'description' => 'Rodillo de madera con rodamientos para amasar masa fácilmente.',
                'price' => 149.00,
                'stock' => 30,
                'category_id' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Batidor Manual de Varillas',
                'description' => 'Batidor de acero inoxidable con mango ergonómico.',
                'price' => 89.00,
                'stock' => 50,
                'category_id' => 4,
                'is_active' => true,
            ],
            
            // Almacenamiento (category_id: 5)
            [
                'name' => 'Set de Contenedores 10 Piezas',
                'description' => 'Contenedores herméticos de plástico libre de BPA con tapas.',
                'price' => 449.00,
                'stock' => 25,
                'category_id' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Frascos de Vidrio x6',
                'description' => 'Frascos de vidrio con tapa hermética, ideales para conservas.',
                'price' => 299.00,
                'stock' => 30,
                'category_id' => 5,
                'is_active' => true,
            ],
            
            // Utensilios (category_id: 6)
            [
                'name' => 'Juego de Espátulas de Silicón',
                'description' => 'Set de 3 espátulas de silicón resistentes al calor.',
                'price' => 199.00,
                'stock' => 45,
                'category_id' => 6,
                'is_active' => true,
            ],
            [
                'name' => 'Cucharón de Acero Inoxidable',
                'description' => 'Cucharón grande para servir sopas y guisos.',
                'price' => 89.00,
                'stock' => 60,
                'category_id' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert([
                'name' => $product['name'],
                'description' => $product['description'],
                'price' => $product['price'],
                'stock' => $product['stock'],
                'category_id' => $product['category_id'],
                'is_active' => $product['is_active'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}