@extends('layouts.app')

@section('title', 'Termos de Uso - Amor com Propósito')

@section('content')
<section class="py-16 px-6 bg-white">
    <div class="max-w-5xl mx-auto">
        <h1 class="text-3xl font-bold text-pink-700 mb-6">Termos de Uso</h1>

        <p class="text-gray-700 mb-4">
            Ao aceder e utilizar a plataforma “Amor com Propósito”, está a concordar com os seguintes termos de utilização.
        </p>

        <h2 class="text-xl font-semibold text-pink-600 mt-6 mb-2">1. Aceitação dos Termos</h2>
        <p class="text-gray-700 mb-4">O uso deste site implica a aceitação integral dos termos aqui descritos...</p>

        <h2 class="text-xl font-semibold text-pink-600 mt-6 mb-2">2. Privacidade e Dados</h2>
        <p class="text-gray-700 mb-4">As informações fornecidas pelos utilizadores são protegidas de acordo com a nossa Política de Privacidade...</p>

        <h2 class="text-xl font-semibold text-pink-600 mt-6 mb-2">3. Responsabilidade do Utilizador</h2>
        <p class="text-gray-700 mb-4">Os utilizadores comprometem-se a fornecer informações verdadeiras e a agir com respeito...</p>

        <p class="text-gray-500 mt-10">Última atualização: {{ now()->format('d/m/Y') }}</p>
    </div>
</section>
@endsection
