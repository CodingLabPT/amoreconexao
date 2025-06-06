@extends('layouts.app')

@section('title', 'Contactos - Amor com Propósito')

@section('content')
<section class="py-16 px-6 bg-white min-h-[70vh]">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold text-pink-700 mb-6">Contacte-nos</h1>

        <p class="text-gray-700 mb-6">
            Se tiver alguma dúvida, sugestão ou quiser falar com a nossa equipa, preencha o formulário abaixo ou envie-nos um email.
        </p>

        <form action="#" method="POST" class="space-y-6 bg-pink-50 p-6 rounded-xl shadow-md">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
                <input type="text" name="name" id="name" required
                       class="w-full mt-1 px-4 py-2 border border-pink-200 rounded-md focus:ring-2 focus:ring-pink-400">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" required
                       class="w-full mt-1 px-4 py-2 border border-pink-200 rounded-md focus:ring-2 focus:ring-pink-400">
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">Mensagem</label>
                <textarea name="message" id="message" rows="5" required
                          class="w-full mt-1 px-4 py-2 border border-pink-200 rounded-md focus:ring-2 focus:ring-pink-400"></textarea>
            </div>

            <div>
                <button type="submit"
                        class="bg-pink-600 text-white px-6 py-2 rounded-md hover:bg-pink-700 transition">
                    Enviar Mensagem
                </button>
            </div>
        </form>
    </div>
</section>
@endsection
