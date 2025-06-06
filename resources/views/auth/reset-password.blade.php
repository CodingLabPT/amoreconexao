@extends('layouts.app')

@section('title', 'Redefinir Palavra-passe - Amor e conexão')

@section('content')
<section class="min-h-screen flex items-center justify-center bg-pink-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8 bg-white p-10 rounded-2xl shadow-lg border border-pink-100">
        <div class="text-center">
            <img src="{{ asset('images/logo-heart.svg') }}" alt="Logo Amor e conexão" class="mx-auto h-12 w-auto mb-4">
            <h2 class="text-2xl font-bold text-gray-800">Redefinir Palavra-passe</h2>
            <p class="mt-2 text-sm text-gray-600">Escolha uma nova palavra-passe segura. 🔐</p>
        </div>

        <form method="POST" action="{{ route('password.update') }}" class="space-y-6">
            @csrf

            <!-- Hidden Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-300">
                @error('email')
                    <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Nova Palavra-passe</label>
                <input id="password" type="password" name="password" required
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-300">
                @error('password')
                    <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar Palavra-passe</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-300">
            </div>

            <!-- Submit -->
            <div>
                <button type="submit"
                    class="w-full py-2 px-4 bg-pink-500 text-white font-semibold rounded-md hover:bg-pink-600 transition duration-200 shadow-md">
                    Redefinir Palavra-passe
                </button>
            </div>
        </form>

        <p class="mt-6 text-center text-sm text-gray-600">
            <a href="{{ route('login') }}" class="text-pink-600 font-medium hover:underline">Voltar ao login</a>
        </p>
    </div>
</section>
@endsection
