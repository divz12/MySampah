@extends('layouts.guest')

@section('title', 'Sign Up | MySampah')

@section('content')
<div class="bg-green-100 min-h-screen">
    <div class="flex items-center justify-center px-4 pt-16 pb-20">
        <div class="flex flex-col md:flex-row max-w-6xl w-full rounded-lg overflow-hidden shadow-md">
            <div class="hidden md:flex items-center justify-center md:w-1/2 bg-green-100">
                <div class="text-center p-8 text-white">
                    <img src="{{ asset('images/register-illustration.png') }}" alt="Register Illustration" class="max-w-md">
                </div>
            </div>

            <div class="bg-gray-200 md:w-1/2 p-8 md:p-12 rounded-lg border border-green-500">
                <h2 class="text-3xl font-bold text-center text-black mb-8">Sign Up</h2>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-sm font-semibold text-black mb-2">Name</label>
                        <div class="flex items-center border bg-gray-100 px-3 py-2 rounded-md">
                            <input id="name" name="name" type="text" required autofocus placeholder="Enter Your Name" class="w-full outline-none bg-transparent text-black">
                        </div>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-semibold text-black mb-2">Email</label>
                        <div class="flex items-center border bg-gray-100 px-3 py-2 rounded-md">
                            <input id="email" name="email" type="email" required placeholder="Enter Your Email" class="w-full outline-none bg-transparent text-black">
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-sm font-semibold text-black mb-2">Password</label>
                        <div class="flex items-center border bg-gray-100 px-3 py-2 rounded-md">
                            <input id="password" name="password" type="password" required placeholder="Enter Your Password" class="w-full outline-none bg-transparent text-black">
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="mb-6">
                        <label for="password_confirmation" class="block text-sm font-semibold text-black mb-2">Confirm Password</label>
                        <div class="flex items-center border bg-gray-100 px-3 py-2 rounded-md">
                            <input id="password_confirmation" name="password_confirmation" type="password" required placeholder="Confirm Your Password" class="w-full outline-none bg-transparent text-black">
                        </div>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                    <br>

                    <button type="submit"
                        class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-2 rounded-md shadow-md transition duration-200 mb-6">
                        SIGN UP
                    </button>

                    <div class="text-center">
                        <p class="text-sm text-gray-600">Already have an account?
                            <a href="{{ route('login') }}" class="text-green-600 hover:underline">Sign in</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
