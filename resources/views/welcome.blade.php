<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Best Website in the World</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col bg-white dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] relative overflow-hidden">

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

    <!-- Navigation Header -->
    @if (Route::has('login'))
        <header class="absolute top-0 right-0 p-6 text-sm z-10">
            <nav class="flex items-center gap-4">
                @auth
                    <a href="{{ url('/dashboard') }}"
                       class="header-link px-4 py-2 rounded-lg border border-[#19140020] dark:border-[#3E3E3A] hover:border-[#19140040] dark:hover:border-[#62605b] transition-colors">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                       class="header-link px-4 py-2 rounded-lg hover:bg-[#f5f5f5] dark:hover:bg-[#1a1a1a] transition-colors">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="header-link px-4 py-2 rounded-lg border border-[#19140020] dark:border-[#3E3E3A] hover:border-[#19140040] dark:hover:border-[#62605b] transition-colors">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        </header>
    @endif

    <main class="flex-1 flex items-center justify-center px-6 py-12">
        <div class="max-w-6xl w-full text-center">
            <h1 class="hero-title text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-bold leading-tight">
                The Best Website<br>in the World
            </h1>
        </div>
    </main>

    <footer class="py-8 px-6">
        <div class="max-w-6xl mx-auto text-center space-y-4">
            <div class="flex justify-center">
                <a href="https://ploy.cloud"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="logo-container inline-block">
                    <img src="https://ploy.cloud/logo.svg"
                         alt="PloyCloud Logo"
                         class="h-12 w-auto transition-transform duration-300 hover:scale-110">
                </a>
            </div>

            <div class="powered-by-text">
                <a href="https://ploy.cloud"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="inline-block text-sm sm:text-base font-medium text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC] transition-colors">
                    Powered by <span class="animated-text font-semibold">PloyCloud</span>
                </a>
            </div>
        </div>
    </footer>
</body>
</html>
