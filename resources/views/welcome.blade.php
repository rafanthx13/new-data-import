<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        @include('components.navbar')
        <div class="container mt-4 w-4/5 mx-auto">
            @include('components.menu')
            <h1 class="text-2xl font-bold">Bem-vindo à Página com Tailwind CSS</h1>
            <p class="mt-2">Esta é uma página simples usando PHP e Tailwind CSS.</p>
        </div>
    </body>

</html>
