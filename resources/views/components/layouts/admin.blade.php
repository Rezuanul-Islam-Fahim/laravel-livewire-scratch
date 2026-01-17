<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Laravel Livewire App' }}</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600"
        rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-900 text-white">
    <nav class="bg-gray-800 border-b border-gray-700">
        <div class="px-6 py-4">
            <div class="flex justify-between items-center">
                <!-- Left side - Nav items -->
                <div class="flex items-center space-x-8">

                    <a href="/dashboard"
                        class="text-white hover:text-gray-300 transition-colors font-medium">
                        Admin Dashboard
                    </a>
                    <a href="/dashboard/articles"
                        class="text-white hover:text-gray-300 transition-colors font-medium">
                        Articles
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="p-6">
        {{ $slot }}
    </div>
</body>

</html>
