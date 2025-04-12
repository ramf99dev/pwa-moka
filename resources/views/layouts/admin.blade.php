<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Panel de Control') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @laravelPWA
    </head>
    <body>
        <div class="grid h-screen grid-cols-5 grid-rows-7">
            <div class="grid grid-cols-5 col-span-5 row-span-1 bg-pink-600 place-items-center">
                <img src="/images/mokalogo.png" alt="" class="w-5/6 col-span-1">
                {{-- <h2 class="col-span-2 col-start-4 font-sans text-5xl font-extrabold text-neutral-50">Panel de Administracion</h2>      --}}
            </div>

            <div class="flex flex-col items-center col-span-1 row-span-6 border-r-2 bg-neutral-50 border-neutral-200">
                <x-nav-item titulo="Productos"/>
                <x-nav-item titulo="Usuarios"/>
                <x-nav-item titulo="Reservas"/>
                <x-nav-item titulo="Órdenes"/>
                <x-nav-item titulo="Estadísticas"/>
            </div>

            <div class="col-span-4 row-span-6 bg-neutral-50">
                {{ $slot }}
            </div>    
            </div>
    </body>
</html>
