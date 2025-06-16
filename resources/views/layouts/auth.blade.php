<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'MySampah')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-green-100">
    <nav class="bg-green-500 text-white py-4 shadow-md">
        <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">
            <div class="flex items-center space-x-8">
                <a href="#" class="text-white text-lg font-bold flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8 mr-2"> MySampah
                </a>
                <a href="{{ route('dashboard') }}" class="hover:underline">Dashboard</a>
                <a href="{{ route('tentangkami') }}" class="hover:underline">Tentang Kami</a>
                <a href="{{ route('layanan') }}" class="hover:underline">Layanan</a>
                <a href="{{ route('donasi') }}" class="hover:underline">Donasi</a>
            </div>

            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" class="flex items-center space-x-2 bg-white text-black px-3 py-1 rounded-full shadow-md focus:outline-none">
                    <img src="{{ asset('images/avatar.jpg') }}" alt="User" class="h-8 w-8 rounded-full border-2 border-green-500">
                    <div class="text-sm font-semibold text-left">
                        {{ Auth::user()->name }}<br>
                        <span class="text-xs text-gray-600">#{{ Auth::user()->id }}</span>
                    </div>
                    <svg class="h-4 w-4 ml-1 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.173l3.71-3.94a.75.75 0 011.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </button>

                <div x-show="open" @click.away="open = false"
                     class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg z-50">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            Keluar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <main class="py-8">
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>
