@extends('layouts.guest')

@section('title', 'Layanan | MySampah')

@section('content')
    <!-- Hero Section -->
    <section class="bg-green-100 text-center py-16 px-6">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="mx-auto h-12 mb-4">
        <h2 class="font-bold text-4xl mb-4">MySampah</h2>
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">
            Kami menyediakan beberapa fitur <br>
            diantaranya yaitu layanan penjemputan <br>
            sampah daur ulang khususnya untuk area <br>
            Purwakarta dan Sekitarnya.
        </h1>
        <a href="#" class="inline-block bg-green-500 text-white px-6 py-2 rounded mt-4 hover:bg-green-600 transition">
            Pelajari Lebih Lanjut
        </a>
    </section>

    <!-- Image Section -->
    <section>
        <img src="{{ asset('images/angkut.jfif') }}" alt="Truk Sampah" class="w-full object-cover">
    </section>
@endsection
