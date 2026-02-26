@extends('layouts.app')

@section('title', 'Inicio - Cocina Yeya')

@section('content')

<!-- Hero Section -->
<section class="bg-gradient-to-r from-cocina-primary to-cocina-secondary text-white py-20">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-5xl font-bold mb-4 drop-shadow-lg">
            🍳 Bienvenido a Cocina Yeya
        </h1>
        <p class="text-xl mb-8 text-black">
            Los mejores productos para equipar tu cocina
        </p>

        <a href="{{ route('productos.index') }}"
           class="bg-white text-black px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition inline-block shadow-md">
            Ver Productos
        </a>
    </div>
</section>

<!-- Estado del Sprint -->
<section class="max-w-7xl mx-auto px-4 py-12">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">
            Sprint 0 Completado ✅
        </h2>
        <p class="text-gray-700">
            Configuración inicial del proyecto finalizada exitosamente
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-cocina-primary hover:shadow-lg transition">
            <div class="text-4xl mb-4">⚙️</div>
            <h3 class="text-xl font-semibold mb-2 text-gray-900">
                Laravel Configurado
            </h3>
            <p class="text-gray-700">
                Framework instalado y funcionando correctamente
            </p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-cocina-secondary hover:shadow-lg transition">
            <div class="text-4xl mb-4">🗄️</div>
            <h3 class="text-xl font-semibold mb-2 text-gray-900">
                Base de Datos MySQL
            </h3>
            <p class="text-gray-700">
                Conectada con datos de productos de cocina
            </p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-cocina-accent hover:shadow-lg transition">
            <div class="text-4xl mb-4">🎨</div>
            <h3 class="text-xl font-semibold mb-2 text-gray-900">
                Tailwind CSS
            </h3>
            <p class="text-gray-700">
                Estilos personalizados aplicados
            </p>
        </div>
    </div>
</section>

<!-- Categorías destacadas -->
<section class="bg-gray-100 py-12">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-8">
            Nuestras Categorías
        </h2>

        @php
            $categorias = [
                ['icono' => '🍳', 'nombre' => 'Ollas y Sartenes'],
                ['icono' => '🔪', 'nombre' => 'Cuchillos'],
                ['icono' => '⚡', 'nombre' => 'Electrodomésticos'],
                ['icono' => '🧁', 'nombre' => 'Repostería'],
                ['icono' => '📦', 'nombre' => 'Almacenamiento'],
                ['icono' => '🥄', 'nombre' => 'Utensilios'],
            ];
        @endphp

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
            @foreach ($categorias as $categoria)
                <div class="bg-white p-4 rounded-lg shadow text-center hover:shadow-lg transition cursor-pointer">
                    <div class="text-4xl mb-2">{{ $categoria['icono'] }}</div>
                    <p class="font-semibold text-sm text-gray-900">
                        {{ $categoria['nombre'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Productos destacados -->
<section class="max-w-7xl mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold text-center text-gray-900 mb-8">
        Productos Destacados
    </h2>

    @php
        $productos = [
            ['icono' => '🍳', 'nombre' => 'Sartén Antiadherente', 'descripcion' => 'Sartén profesional de 28cm', 'precio' => '599.00'],
            ['icono' => '🔪', 'nombre' => 'Juego de Cuchillos', 'descripcion' => 'Set profesional de 6 piezas', 'precio' => '899.00'],
            ['icono' => '☕', 'nombre' => 'Licuadora 10 Velocidades', 'descripcion' => '600W de potencia', 'precio' => '1,599.00'],
        ];
    @endphp

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($productos as $producto)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                <div class="bg-gray-200 h-48 flex items-center justify-center text-6xl">
                    {{ $producto['icono'] }}
                </div>

                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2 text-gray-900">
                        {{ $producto['nombre'] }}
                    </h3>
                    <p class="text-gray-700 text-sm mb-4">
                        {{ $producto['descripcion'] }}
                    </p>

                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-cocina-primary">
                            ${{ $producto['precio'] }}
                        </span>

                        <button
                           class="bg-cocina-primary text-black px-4 py-2 rounded-lg hover:bg-cocina-accent transition text-sm shadow">
                            Agregar
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

@endsection