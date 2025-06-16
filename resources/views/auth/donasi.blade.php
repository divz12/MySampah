@extends('layouts.auth')

@section('title', 'Donasi | MySampah')

@section('content')

    <section>
        <img src="{{ asset('images/donasi2.jpg') }}" alt="Donasi Barang Bekas" class="w-full max-h-96 object-cover">
    </section>

    <!-- Hero Text Section -->
    <section class="bg-green-100 text-center py-12 px-6">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="mx-auto h-12 mb-3">
        <h2 class="text-4xl font-bold text-gray-800 mb-2">MySampah</h2>
        <p class="text-lg text-gray-700 mb-1">Punya Barang Bekas yang Masih Bagus?</p>
        <p class="text-lg text-gray-700 mb-2">Donasikan Kesini</p>
        <p class="text-lg text-gray-700 mb-6">Ubah Barang Bekasmu Menjadi Bermanfaat</p>
        <a href="#" class="inline-block bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600 transition">
            Pelajari Lebih Lanjut
        </a>
    </section>

@endsection