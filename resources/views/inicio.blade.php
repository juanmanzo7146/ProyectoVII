@extends('layouts.app')

@section('content')

<div class="min-h-screen flex items-center justify-center bg-gray-100">

    <div class="bg-white shadow-xl rounded-2xl p-10 max-w-xl w-full text-center">

        <h1 class="text-4xl font-extrabold text-gray-800 mb-4">
            🍳 Bienvenido a Cocina Yeya
        </h1>

        <p class="text-gray-600 text-lg mb-8">
            Descubre utensilios, herramientas y todo lo que necesitas para tu cocina
        </p>

        <a href="{{ route('productos.index') }}"
           class="inline-block bg-black text-white text-lg font-semibold px-8 py-4 rounded-xl shadow-md hover:bg-gray-800 transition duration-300">
            Ver Productos
        </a>

    </div>

</div>

@endsection