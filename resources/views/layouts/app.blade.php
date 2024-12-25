<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title) ? $title . ' | | ' . config('app.name', 'Laravel') : config('app.name', 'Laravel') }}
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen"
        style="background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(255,255,255,1) 0%, rgba(181,243,255,1) 100%);">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <div class="max-w-7xl mx-auto py-6 px-4 text-center">
                {{ $header }}
            </div>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        <footer class="bg-violet-800 text-white py-12">
            <div class="max-w-7xl mx-auto text-center">
                <div class="mb-4">
                    <h2 class="text-2xl font-semibold">24pm Pendekar Malang</h2>
                    <p class="text-sm">Your one-stop platform for mathematics, science, and language courses.</p>
                </div>
                <div class="flex justify-center gap-8 mb-6">
                    <a href="#" class="text-gray-300 hover:text-white">About Us</a>
                    <a href="#" class="text-gray-300 hover:text-white">Privacy Policy</a>
                    <a href="#" class="text-gray-300 hover:text-white">Terms & Conditions</a>
                    <a href="#" class="text-gray-300 hover:text-white">Contact</a>
                </div>
                <div class="text-sm text-gray-400">
                    <p>&copy; 2024 24pm Learning Center. All Rights Reserved.</p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
