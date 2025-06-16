@extends('layouts.auth')

@section('title', 'Dashboard | MySampah')

@section('content')

    <div class="flex max-w-7xl mx-auto gap-4 p-4">
    <!-- Sidebar -->
    <aside class="w-full md:w-1/4 bg-green-700 text-white p-6 rounded-tr-3xl rounded-bl-3xl shadow-md text-center">
      <h2 class="text-xl font-bold mb-6">Hai, {{ Auth::user()->name}}</h2>
      
      <div class="flex justify-between text-center mb-4 ">
        <div>
          <div class="text-xl font-semibold">0</div>
          <i class="fa-solid fa-recycle white fa-lg"></i>
          <div class="text-sm">Buang Sampah</div>
        </div>
        <div>
          <div class="text-xl font-semibold">0</div>
          <i class="fa-solid fa-wallet white fa-lg"></i>
          <div class="text-sm">Dompet</div>
        </div>
      </div>

      <p class="text-sm text-center mb-2">Mohon lengkapi Profile & Alamat terlebih dahulu</p>
      <button class="w-full bg-gray-400 text-green-700 py-2 rounded-bl-3xl rounded-tr-3xl mb-6 flex items-center justify-center gap-2">
        Request Pick-Up <i class="fa-solid white fa-truck"></i>
      </button>

      <nav class="space-y-3 text-start">
        <a href="#" class="block bg-green-900 py-2 px-3 rounded-bl-3xl rounded-tr-3xl font-semibold">• Dashboard</a>
        <a href="#" class="block">Profile</a>
        <a href="#" class="block">Transaksi</a>
        <a href="#" class="block">Dompet</a>
        <a href="#" class="block">Logout</a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8 w-1/2">
      <h1 class="text-4xl font-bold mb-2">Analytic</h1>
      <p class="mb-6 text-gray-700">Berikut ini adalah data hasil penukaran sampah Anda dalam beberapa waktu</p>

      <div class="flex flex-col md:flex-row items-start md:items-center gap-4 mb-6">
        <div>
          <label for="from-date" class="block font-medium mb-1">Dari Tanggal</label>
          <input type="date" id="from-date" class="border border-gray-300 rounded-md p-2 w-full" value="2025-06-01">
        </div>

        <div>
          <label for="to-date" class="block font-medium mb-1">Sampai Tanggal</label>
          <input type="date" id="to-date" class="border border-gray-300 rounded-md p-2 w-full" value="2025-06-30">
        </div>

        <div class="self-end md:self-auto">
          <button class="bg-green-700 text-white px-6 py-2 rounded-tr-2xl rounded-bl-2xl font-semibold mt-1 md:mt-6">
            Filter
          </button>
        </div>
      </div>

      <p class="text-lg font-medium text-center text-gray-800 mt-10">Ayo Nimbang Sekarang!</p>
    </main>
  </div>

@endsection