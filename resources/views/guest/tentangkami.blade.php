@extends('layouts.guest')

@section('title', 'Tentang Kami | MySampah')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-[80vh] bg-cover bg-center" style="background-image: url('{{ asset('images/smph.png') }}');">
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="absolute inset-0 flex flex-col justify-center items-center text-white text-center">
            <h1 class="text-4xl font-bold mb-2">MySampah</h1>
            <p class="text-lg">Ayo Jadikan Bumi Lebih Sehat</p>
        </div>
    </div>

    <!-- Tentang Kami Section -->
    <section class="bg-green-100 py-20 text-center">
        <div class="max-w-3xl mx-auto">
            <img src="{{ asset('images/logo.png') }}" alt="Logo MySampah" class="mx-auto h-16 mb-4">
            <h2 class="text-3xl font-bold text-green-800 mb-4">MySampah</h2>
            <p class="text-gray-700 px-4">
                MySampah hadir untuk menjawab permasalahan klasik dalam pengelolaan sampah yang sering kali tidak 
                terkelola dengan baik dan terorganisir. Ini adalah gerakan digital menuju masa depan yang lebih hijau. 
                Dengan adanya MySampah ini diharapkan mampu menumbuhkan kesadaran masyarakat terhadap pentingnya 
                daur ulang dan kontribusi terhadap lingkungan yang lebih sehat.
            </p>
        </div>
    </section>

    <!-- Ajak Tukar Sampah -->
    <section class="relative">
        <img src="{{ asset('images/daur.jpg') }}" alt="Tukar Sampah" class="w-full h-auto max-h-[500px] object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-30 flex flex-col justify-center items-center text-white text-center px-4">
            <h3 class="text-2xl md:text-3xl font-bold mb-2">Tukar Barang Bekasmu Sekarang!!</h3>
            <a href="{{ route('layanan') }}" class="bg-green-500 hover:bg-green-600 text-white font-semibold px-6 py-2 rounded-full mt-4">
                Tukar Sampah
            </a>
        </div>
    </section>
@endsection
