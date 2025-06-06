@extends('layouts.app')

@section('title', 'Dashboard - Amor e conexão')

@section('header')
    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Bem-vindo,  💖</h2>
@endsection

@section('content')
<section class="py-10 px-4 sm:px-8 bg-pink-50 min-h-[70vh]">
    <div class="max-w-5xl mx-auto">
        <div class="bg-white rounded-xl shadow-lg border border-pink-100 p-6">
            <h3 class="text-2xl font-bold text-pink-600 mb-4">O seu espaço pessoal</h3>
            <p class="text-gray-700 leading-relaxed">
                Aqui poderá acompanhar os seus matches, agendar encontros, atualizar o seu perfil e aceder aos eventos exclusivos da nossa comunidade.
            </p>

            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                <a href="#" class="p-5 bg-pink-100 hover:bg-pink-200 transition rounded-lg shadow text-center">
                    <span class="block text-lg font-semibold text-pink-700">O Meu Perfil</span>
                    <span class="text-sm text-pink-600">Ver e editar informação pessoal</span>
                </a>
                <a href="#" class="p-5 bg-pink-100 hover:bg-pink-200 transition rounded-lg shadow text-center">
                    <span class="block text-lg font-semibold text-pink-700">Matches</span>
                    <span class="text-sm text-pink-600">Ver sugestões compatíveis</span>
                </a>
                <a href="#" class="p-5 bg-pink-100 hover:bg-pink-200 transition rounded-lg shadow text-center">
                    <span class="block text-lg font-semibold text-pink-700">Eventos</span>
                    <span class="text-sm text-pink-600">Próximos encontros sociais</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
