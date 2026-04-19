<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Cocina Yeya') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-100">

    <div class="min-h-screen">

        <!-- Navigation -->
        @include('layouts.navigation')

        <!-- Header opcional (Breeze) -->
        @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Contenido -->
        <main class="p-6">

            {{-- Para Breeze --}}
            @isset($slot)
                {{ $slot }}
            @endisset

            {{-- Para Blade clásico --}}
            @yield('content')

        </main>

    </div>

</body>
</html>