@extends('layouts.app')

@section('title', 'Política de Privacidade - Amor e conexão')

@section('content')
<section class="py-16 px-6 bg-white">
    <div class="max-w-5xl mx-auto">
        <h1 class="text-3xl font-bold text-pink-700 mb-6">Política de Privacidade</h1>

        <p class="text-gray-700 mb-4">
            A sua privacidade é importante para nós. Esta política descreve como recolhemos, usamos e protegemos os seus dados.
        </p>

        <h2 class="text-xl font-semibold text-pink-600 mt-6 mb-2">1. Recolha de Dados</h2>
        <p class="text-gray-700 mb-4">Recolhemos dados pessoais apenas com o seu consentimento e para os fins de emparelhamento e suporte.</p>

        <h2 class="text-xl font-semibold text-pink-600 mt-6 mb-2">2. Uso da Informação</h2>
        <p class="text-gray-700 mb-4">Utilizamos os seus dados exclusivamente para criar matches compatíveis, melhorar a experiência e enviar comunicações relevantes.</p>

        <h2 class="text-xl font-semibold text-pink-600 mt-6 mb-2">3. Partilha de Dados</h2>
        <p class="text-gray-700 mb-4">Nunca partilhamos os seus dados com terceiros sem consentimento explícito, salvo exigência legal.</p>

        <h2 class="text-xl font-semibold text-pink-600 mt-6 mb-2">4. Segurança</h2>
        <p class="text-gray-700 mb-4">Utilizamos práticas técnicas e organizacionais para proteger os seus dados contra acesso não autorizado.</p>

        <p class="text-gray-500 mt-10">Última atualização: {{ now()->format('d/m/Y') }}</p>
    </div>
</section>
@endsection
