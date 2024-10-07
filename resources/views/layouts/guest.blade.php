{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
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
</html> --}}


{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Log In</title> --}}
    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
    {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}
    <!-- Scripts -->

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .bg-cover {
            background-image: url('{{Vite::asset('resources/images/car1.png')}}');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div>
            <img src="{{ Vite::asset('resources/images/taxiLogo.jpeg') }}" style="width:100px;margin-left:10px ;">
        </div>
        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }} | CityTaxi</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .bg-cover {
                background-image: url('{{ Vite::asset('resources/images/background.jpeg') }}');
                background-size: cover;
                background-position: center;
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col items-center justify-center sm:pt-6 pt-4 bg-cover bg-gray-100 dark:bg-blue-900"
        style="justify-content: right; align-items: right">
            <!-- Logo or Branding -->
            <div class="w-full sm:max-w-md px-6 py-4 text-center">
                <img src="{{ Vite::asset('resources/images/taxiLogo.jpeg') }}" alt="CityTaxi Logo" class="mx-auto h-16 w-auto">
                <h1 class="text-xl font-bold mt-2">Welcome to CityTaxi</h1>
            </div>
            <!-- Main content -->
            <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md rounded-lg" style="background-color: rgba(0,0,0,0.6)">
                {{ $slot }}
            </div>
            <!-- Footer or additional links -->
            
        </div>
    </body>
</html>
