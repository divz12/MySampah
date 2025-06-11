@extends('layouts.auth')

@section('title', 'Dashboard | MySampah')

@section('content')
    <div class="max-w-6xl mx-auto px-4">
        <h1 class="text-3xl font-bold text-green-700 mb-4">Selamat datang, {{ Auth::user()->name }}!</h1>
        <p class="text-gray-700">Ini adalah halaman utama setelah login.</p>
    </div>
@endsection
