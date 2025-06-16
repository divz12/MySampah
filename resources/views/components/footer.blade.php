<footer class="bg-green-500 text-white pt-20 pb-6">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-4">
        <div class="md:col-span-3 grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <h3 class="font-bold text-lg mb-2">MySampah</h3>
                <ul class="space-y-1">
                    <li><a href="{{ route('tentangkami') }}" class="hover:underline">Tentang Kami</a></li>
                    <li><a href="{{ route('layanan') }}" class="hover:underline">Layanan</a></li>
                    <li><a href="{{ route('donasi') }}" class="hover:underline">Donasi</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-bold text-lg mb-2">Kontak Kami</h3>
                <ul class="space-y-1">
                    <li><a href="#" class="hover:underline">Kontak</a></li>
                    <li><a href="#" class="hover:underline">Email</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-bold text-lg mb-2">Lokasi Kami</h3>
                <p>Purwakarta, Jawa Barat Indonesia</p>
            </div>
        </div>

        <div class="w-full h-40 md:h-auto">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63421.50984167396!2d107.41384422359089!3d-6.541329148762902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690e60454c6667%3A0x7ee7eda6d6e4556f!2sPurwakarta%2C%20Kec.%20Purwakarta%2C%20Kabupaten%20Purwakarta%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1749605739838!5m2!1sid!2sid"
                width="100%" height="130%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

    <!-- Copyright -->
    <div class="text-center text-sm mt-10 border-t border-green-400 pt-4">
        &copy; {{ date('Y') }} MySampah By Tim-MS. All rights reserved.
    </div>
</footer>
