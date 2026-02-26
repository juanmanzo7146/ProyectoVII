<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Ollas y Sartenes',
                'slug' => 'ollas-sartenes',
                'description' => 'Utensilios para cocinar de alta calidad'
            ],
            [
                'name' => 'Cuchillos y Tablas',
                'slug' => 'cuchillos-tablas',
                'description' => 'Herramientas de corte profesionales'
            ],
            [
                'name' => 'Electrodomésticos',
                'slug' => 'electrodomesticos',
                'description' => 'Aparatos eléctricos para la cocina'
            ],
            [
                'name' => 'Repostería',
                'slug' => 'reposteria',
                'description' => 'Todo para hacer postres y pasteles'
            ],
            [
                'name' => 'Almacenamiento',
                'slug' => 'almacenamiento',
                'description' => 'Contenedores y recipientes'
            ],
            [
                'name' => 'Utensilios',
                'slug' => 'utensilios',
                'description' => 'Espátulas, cucharas y más'
            ],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category['name'],
                'slug' => $category['slug'],
                'description' => $category['description'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}