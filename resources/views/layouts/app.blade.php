<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cocina Yeya')</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
    <main class="min-h-screen">
        @yield('content')
    </main>
</body>
</html>