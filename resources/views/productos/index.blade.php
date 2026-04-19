<x-app-layout>

    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800">
            🛍️ Productos
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto">

        <!-- BUSCADOR + FILTRO -->
        <form method="GET" action="{{ route('productos.index') }}" class="mb-8 flex flex-col md:flex-row gap-4 items-center justify-center">

            <!-- Input búsqueda -->
            <input 
                type="text" 
                name="search"
                value="{{ $query ?? '' }}"
                placeholder="Buscar productos o categorías..."
                class="w-full md:w-1/2 px-4 py-3 border rounded-lg focus:outline-none shadow-sm"
            >

            <!-- Select categorías -->
            <select name="category" class="px-4 py-3 border rounded-lg shadow-sm">
                <option value="">Todas las categorías</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}" 
                        {{ request('category') == $categoria->id ? 'selected' : '' }}>
                        {{ $categoria->name }}
                    </option>
                @endforeach
            </select>

            <!-- Botón -->
            <button 
                type="submit"
                class="bg-black text-white px-6 py-3 rounded-lg hover:bg-gray-800 transition shadow">
                Buscar
            </button>

        </form>

        <!-- RESULTADOS -->
        @if($productos->isEmpty())
            <p class="text-center text-gray-500 text-lg">
                No se encontraron productos 😔
            </p>
        @else

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                @foreach($productos as $producto)
                    <div class="bg-white p-5 rounded-xl shadow hover:shadow-lg transition">

                        <h3 class="font-bold text-lg text-gray-900">
                            {{ $producto->name }}
                        </h3>

                        <p class="text-gray-600 mt-2">
                            {{ $producto->description }}
                        </p>

                        <!-- Categoría -->
                        <p class="text-sm text-gray-500 mt-2">
                            Categoría: 
                            {{ $producto->category->name ?? 'Sin categoría' }}
                        </p>

                        <!-- Precio -->
                        <p class="text-black font-bold text-xl mt-3">
                            ${{ $producto->price }}
                        </p>

                        <!-- Botón -->
                        <button class="mt-4 w-full bg-cocina-primary text-black py-2 rounded-lg hover:bg-cocina-accent transition">
                            Agregar al carrito
                        </button>

                    </div>
                @endforeach

            </div>

        @endif

    </div>

</x-app-layout>