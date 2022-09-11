<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Hot Zingo') }}</title>

        <!-- Favicon-->
        <link
        rel="shortcut icon"
        href="./assets/images/Chameleon.png"
        type="image/png"
        />

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link
            href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Permanent+Marker&display=swap"
            rel="stylesheet"
        />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-theme antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- Page Content -->
            <main class="bg-stone-100">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
