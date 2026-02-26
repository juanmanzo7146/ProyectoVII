<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Usuario Admin - Yeya
        DB::table('users')->insert([
            'name' => 'Yeya Administradora',
            'email' => 'yeya@cocina.com',
            'password' => Hash::make('cocina123'),
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Usuario Cliente de prueba
        DB::table('users')->insert([
            'name' => 'Cliente Prueba',
            'email' => 'cliente@test.com',
            'password' => Hash::make('cliente123'),
            'role' => 'customer',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}