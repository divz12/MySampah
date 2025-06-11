@extends('layouts.guest')

@section('title', 'Sign In | MySampah')

@section('content')
<div class="min-h-screen flex items-center justify-center px-4 pt-16 pb-20">
    <div class="flex flex-col md:flex-row max-w-6xl w-full rounded-lg overflow-hidden shadow-md">
        <div class="bg-gray-200 md:w-1/2 p-8 md:p-12 rounded-lg border border-green-500">
            <h2 class="text-3xl font-bold text-center text-black mb-8">Sign In</h2>

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-sm font-semibold text-black mb-2">Email / No Handphone</label>
                    <div class="flex items-center border bg-white px-3 py-2 rounded-md shadow-sm">
                        <input id="email" name="email" type="text" required autofocus placeholder="Enter Your Email" class="w-full outline-none bg-transparent text-black">
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mb-2">
                    <label for="password" class="block text-sm font-semibold text-black mb-2">Password</label>
                    <div class="flex items-center border bg-white px-3 py-2 rounded-md shadow-sm">
                        <input id="password" name="password" type="password" required placeholder="Enter Your Password" class="w-full outline-none bg-transparent text-black">
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="text-right text-sm text-black mt-1 mb-4">
                    <a href="{{ route('password.request') }}" class="hover:underline">Forgot Password?</a>
                </div>
                <br>

                <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-2 rounded-md shadow-md transition duration-200">
                    Sign In
                </button>
            </form>

            <div class="text-center mt-6 text-sm text-black">
                <p class="mb-2">
                    By signing up you agree to our
                    <a href="#" class="text-green-600 hover:underline">Terms of services</a> and
                    <a href="#" class="text-green-600 hover:underline">Privacy policy</a>
                </p>
                <br>
                <p>
                    Belum Punya Akun?
                    <a href="{{ route('register') }}" class="text-green-600 hover:underline">Sign Up</a>
                </p>
            </div>
        </div>

        <div class="hidden md:flex items-center justify-center md:w-1/2 bg-green-100">
            <img src="{{ asset('images/login-illustration.png') }}" alt="Login Illustration" class="max-w-md">
        </div>
    </div>
</div>
@endsection