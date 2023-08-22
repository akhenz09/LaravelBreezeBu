<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('/resources/css/fontawesome.css') }}">
        <link rel="stylesheet" href="{{ asset('/resources/css/templatemo-lugx-gaming.css') }}">
        <link rel="stylesheet" href="{{ asset('/resources/css/owl.css') }}">
        <link rel="stylesheet" href="{{ asset('/resources/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('/resources/css/https://unpkg.com/swiper@7/swiper-bundle.min.css') }}">

        <script src="{{ asset('/resources/js/isotope.min.js') }}" defer></script>
        <script src="{{ asset('/resources/js/owl-carousel.js') }}" defer></script>
        <script src="{{ asset('/resources/js/counter.js') }}" defer></script>
        <script src="{{ asset('/resources/js/custom.js') }}" defer></script>
        <script src="{{ asset('/resources/js/bootstrap.min.js') }}" defer></script>
        <script src="{{ asset('/resources/js/jquery.min.js') }}" defer></script>
        <script src="{{ asset('/resources/js/jquery.js') }}" defer></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/landing.css', '/resources/css/fontawesome.css', '/resources/css/templatemo-lugx-gaming.css'
        , '/resources/css/owl.css', '/resources/css/animate.css', 'https://unpkg.com/swiper@7/swiper-bundle.min.css', 'resources/js/isotope.min.js', 'resources/js/owl-carousel.js'
        , 'resources/js/counter.js', 'resources/js/custom.js', 'resources/js/bootstrap.min.js', 'resources/jquery/jquery.min.js', 'resources/jquery/jquery.js'
        , 'resources/jquery/jquery.slim.js', 'resources/jquery/jquery.slim.min.js'])






    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
