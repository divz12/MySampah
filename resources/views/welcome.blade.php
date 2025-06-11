@extends('layouts.guest')

@section('title', 'Home | MySampah')

@section('content')

<section class="pt-40 py-32 bg-[url('/public/images/sampah.jpg')] bg-cover bg-center text-white">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 px-6 p-6 rounded-md">
            <h1 class="text-3xl font-semibold mb-4">Buat Sampahmu Menjadi Berharga</h1>
            <p class="text-sm mb-6">#UbahDuniaHanyaSemenit</p>
            <a href="#" class="bg-green-500 hover:bg-green-600 text-white font-semibold px-6 py-2 rounded-md transition duration-200">
                Tukar Sampah
            </a>
        </div>
        <div class="md:w-1/2"></div>
    </div>
</section>

<section class="py-40 bg-[url('/public/images/kelola.jpg')] bg-cover bg-center text-white">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-end">
        <div class="md:w-1/2"></div>
        <div class="md:w-1/2 px-6 p-6 rounded-md text-right">
            <h2 class="text-2xl font-semibold mb-4">Kelola Sampah Anda Disini</h2>
            <p class="mb-6">
                Kami menerima sampah organik, anorganik, dan B3. Kelola melalui sistem kami agar lingkungan lebih bersih dan sehat.
            </p>
            <a href="#" class="bg-green-500 hover:bg-green-600 text-white font-semibold px-6 py-2 rounded-md transition duration-200">
                Tentang Kami
            </a>
        </div>
    </div>
</section>

<section class="py-40 bg-[url('/public/images/donasi.jpg')] bg-cover bg-center text-white">
    <div class="max-w-3xl mx-auto px-6 p-8 rounded-md text-center">
        <h2 class="text-2xl font-bold mb-4">
            Punya Barang Bekas yang Masih Layak Pakai Tapi Sudah Tak Terpakai?
        </h2>
        <p class="mb-6">
            Jangan dibuang! Salurkan donasimu di sini dan bantu mereka yang membutuhkan.
        </p>
        <a href="#" class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-md font-semibold transition duration-200">
            Donasikan
        </a>
    </div>
</section>

@endsection