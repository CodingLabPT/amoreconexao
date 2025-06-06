@extends('layouts.app')

@section('title', 'Entrar - Amor e conexão')

@section('content')
<section class="min-h-screen flex items-center justify-center bg-pink-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8 bg-white p-10 rounded-2xl shadow-lg border border-pink-100">
        <div class="text-center">
            <img src="{{ asset('images/login.png') }}" alt="Logo Amor e conexão" class="mx-auto h-24 md:h-32 w-auto mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Entrar na sua conta</h2>
            <p class="mt-2 text-sm text-gray-500">Bem-vindo de volta 💖</p>
        </div>

        @if(session('status'))
            <div class="text-green-600 text-sm text-center mb-4">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" name="email" type="email" required autofocus
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-300">
                @error('email')
                    <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Palavra-passe</label>
                <input id="password" name="password" type="password" required
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-300">
                @error('password')
                    <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between">
                <label class="flex items-center space-x-2">
                    <input type="checkbox" name="remember" class="rounded text-pink-500 border-gray-300">
                    <span class="text-sm text-gray-600">Lembrar-me</span>
                </label>
                <a href="{{ route('password.request') }}" class="text-sm text-pink-600 hover:underline">
                    Esqueceu a palavra-passe?
                </a>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="w-full py-2 px-4 bg-pink-500 text-white font-semibold rounded-md hover:bg-pink-600 transition duration-200 shadow-md">
                    Entrar
                </button>
            </div>
        </form>

        <p class="mt-6 text-center text-sm text-gray-600">
            Ainda não tem conta?
            <a href="{{ route('register') }}" class="text-pink-600 font-medium hover:underline">Registar-se</a>
        </p>
    </div>
</section>
@endsection
