<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-white dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] relative overflow-x-hidden">

        <!-- Animated Geometric Background -->
        <div class="geometric-bg" aria-hidden="true">
            <div class="shape shape-circle shape-1"></div>
            <div class="shape shape-circle shape-2"></div>
            <div class="shape shape-square shape-3"></div>
            <div class="shape shape-square shape-4"></div>
            <div class="shape shape-triangle shape-5"></div>
            <div class="shape shape-triangle shape-6"></div>
            <div class="shape shape-circle shape-7"></div>
            <div class="shape shape-square shape-8"></div>
            <div class="shape shape-triangle shape-9"></div>
            <div class="shape shape-circle shape-10"></div>
        </div>

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 px-4 sm:px-6 relative z-10">
            <div class="mb-6 sm:mb-0">
                <a href="/">
                    <img src="https://ploy.cloud/logo.svg" alt="PloyCloud Logo" class="h-12 sm:h-16 w-auto transition-transform duration-300 hover:scale-110">
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-4 sm:px-6 py-6 sm:py-4 bg-white/95 dark:bg-[#1a1a1a]/95 backdrop-blur-sm shadow-lg overflow-hidden rounded-lg sm:rounded-lg border border-[#19140020] dark:border-[#3E3E3A]">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
