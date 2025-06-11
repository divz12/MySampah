<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MySampah')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-green-100 text-gray-800">

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Konten halaman --}}
    @yield('content')

    {{-- Footer --}}
    @include('components.footer')

</body>
</html>
