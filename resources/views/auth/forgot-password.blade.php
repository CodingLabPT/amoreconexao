@extends('layouts.app')

@section('title', 'Recuperar Palavra-passe - Amor e conexão')

@section('content')
<section class="min-h-screen flex items-center justify-center bg-pink-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8 bg-white p-10 rounded-2xl shadow-lg border border-pink-100">
        <div class="text-center">
            <img src="{{ asset('images/logo-heart.svg') }}" alt="Logo Amor e conexão" class="mx-auto h-12 w-auto mb-4">
            <h2 class="text-2xl font-bold text-gray-800">Esqueceu a Palavra-passe?</h2>
            <p class="mt-2 text-sm text-gray-600">
                Insira o seu email e enviaremos um link para recuperar a palavra-passe. 💌
            </p>
        </div>

        @if (session('status'))
            <div class="text-green-600 text-sm text-center">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" type="email" name="email" required autofocus
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-300">
                @error('email')
                    <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit -->
            <div>
                <button type="submit"
                    class="w-full py-2 px-4 bg-pink-500 text-white font-semibold rounded-md hover:bg-pink-600 transition duration-200 shadow-md">
                    Enviar link de recuperação
                </button>
            </div>
        </form>

        <p class="mt-6 text-center text-sm text-gray-600">
            <a href="{{ route('login') }}" class="text-pink-600 font-medium hover:underline">Voltar ao login</a>
        </p>
    </div>
</section>
@endsection
