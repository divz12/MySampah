<nav class="bg-green-500 text-white px-6 py-4 flex justify-between items-center sticky top-0 z-50">
    <div class="flex items-center space-x-10">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8">
            <a href="{{ route('welcome') }}" class="font-bold text-lg hover:underline">MySampah</a>

        </div>

        <a href="#" class="hover:underline font-semibold">Tentang Kami</a>
        <a href="#" class="hover:underline font-semibold">Layanan</a>
        <a href="#" class="hover:underline font-semibold">Donasi</a>
    </div>

    <a href="{{ route('login') }}" class="font-semibold hover:underline">Sign In</a>
</nav>
