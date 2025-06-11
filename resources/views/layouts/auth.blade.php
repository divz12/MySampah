<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'MySampah')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-green-100">
    <nav class="bg-green-500 text-white py-4 shadow-md">
        <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">
            <div class="flex items-center space-x-8">
                <a href="#" class="text-white text-lg font-bold flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8 mr-2"> MySampah
                </a>
                <a href="{{ route('dashboard') }}" class="hover:underline">Dashboard</a>
                <a href="{{ route('about') }}" class="hover:underline">Tentang Kami</a>
                <a href="{{ route('services') }}" class="hover:underline">Layanan</a>
                <a href="{{ route('donation') }}" class="hover:underline">Donasi</a>
            </div>

            <div class="flex items-center space-x-2 bg-white text-black px-3 py-1 rounded-full shadow-md">
                <img src="{{ asset('/public/images/avatar.jpg') }}" alt="User" class="h-8 w-8 rounded-full border-2 border-green-500">
                <div class="text-sm font-semibold">
                    {{ Auth::user()->name }}<br>
                    <span class="text-xs text-gray-600">#{{ Auth::user()->id }}</span>
                </div>
            </div>
        </div>
    </nav>

    <main class="py-8">
        @yield('content')
    </main>

</body>
</html>
