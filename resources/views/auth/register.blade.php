@extends('layouts.app')

@section('title', 'Registar - Amor e conexão')

@section('content')
<section class="min-h-screen flex items-center justify-center bg-pink-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8 bg-white p-10 rounded-2xl shadow-lg border border-pink-100">
        <div class="text-center">
            <img src="{{ asset('images/register.png') }}" alt="Logo Amor e conexão" class="mx-auto h-24 md:h-32 w-auto mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Criar uma Conta</h2>
            <p class="mt-2 text-sm text-gray-500">Junte-se à comunidade que acredita no amor com intenção 💖</p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf

            <!-- Nome -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
                <input id="name" name="name" type="text" required autofocus
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-300">
                @error('name')
                    <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" name="email" type="email" required
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

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar Palavra-passe</label>
                <input id="password_confirmation" name="password_confirmation" type="password" required
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-300">
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="w-full py-2 px-4 bg-pink-500 text-white font-semibold rounded-md hover:bg-pink-600 transition duration-200 shadow-md">
                    Criar Conta
                </button>
            </div>
        </form>

        <p class="mt-6 text-center text-sm text-gray-600">
            Já tem uma conta?
            <a href="{{ route('login') }}" class="text-pink-600 font-medium hover:underline">Entrar</a>
        </p>
    </div>
</section>
@endsection
