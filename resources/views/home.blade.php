@extends('layouts.app')

@section('title', 'Início - Amor & Conexão')

@section('content')

    {{-- HERO SECTION --}}
    <section class="relative w-full min-h-[70vh] flex items-center justify-center text-center overflow-hidden">
        {{-- Vídeo de fundo --}}
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0">
            <source src="/videos/hero-video.mp4" type="video/mp4">
            O seu navegador não suporta vídeos em HTML5.
        </video>

        {{-- Camada escura sobre o vídeo --}}
        <div class="absolute inset-0 bg-black/15 backdrop-blur-sm z-10"></div>

        {{-- Conteúdo por cima do vídeo --}}
        <div class="relative z-20 text-white max-w-2xl p-8 rounded-xl">
            <br><br><br><br><br><br>
            <h1 class="text-4xl sm:text-5xl font-extrabold mb-4 mt-56">Encontre o Amor com Intenção</h1>
            <p class="text-lg sm:text-xl mb-6">Somos a ponte entre corações que procuram mais do que encontros — procuram conexão.</p>
            <a href="#como-funciona"
            class="inline-block bg-pink-500 hover:bg-pink-600 text-white font-semibold py-3 px-6 rounded-lg shadow-lg transition duration-300">
                Descubra Como Funciona
            </a>
        </div>
    </section>

    {{-- SOBRE NÓS --}}
    <section id="sobre-nos" class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row items-center gap-10">
            <div class="md:w-1/2 space-y-6">
                <h2 class="text-3xl font-bold text-pink-600">Sobre Nós</h2>
                <p class="text-gray-700 text-lg leading-relaxed">
                    A nossa missão é criar ligações verdadeiras, baseadas em valores, empatia e respeito.
                    Trabalhamos com confidencialidade, escuta ativa e dedicação total a cada história de amor.
                </p>
            </div>
            <div class="md:w-1/2 text-center">
                <!-- rounded-xl shadow-lg -->
                <img src="/images/sobre-nos.png" alt="Isilda Afonso" class="mx-auto w-72">
                <p class="mt-4 text-lg font-semibold text-gray-800">Isilda Afonso</p>
            </div>
        </div>
    </section>

    {{-- COMO FUNCIONA --}}
    <section id="como-funciona" class="py-16 bg-pink-50">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-pink-600 mb-10">Como Funciona</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">

                {{-- Consulta Inicial --}}
                <div>
                    <img src="/icons/consulta-inicial.png" alt="Consulta Inicial" class="mx-auto h-20 mb-4 rounded-lg shadow-md">
                    <h5 class="text-lg font-semibold mb-1">Consulta Inicial</h5>
                    <p class="text-sm text-gray-600">Entrevista pessoal para entender os seus objetivos.</p>
                </div>

                {{-- Perfil Personalizado --}}
                <div>
                    <img src="/icons/perfil-personalizado.png" alt="Perfil Personalizado" class="mx-auto h-20 mb-4 rounded-lg shadow-md">
                    <h5 class="text-lg font-semibold mb-1">Perfil Personalizado</h5>
                    <p class="text-sm text-gray-600">Criação de um perfil único com base nos seus valores.</p>
                </div>

                {{-- Matching Manual --}}
                <div>
                    <img src="/icons/matching-manual.png" alt="Matching Manual" class="mx-auto h-20 mb-4 rounded-lg shadow-md">
                    <h5 class="text-lg font-semibold mb-1">Matching Manual</h5>
                    <p class="text-sm text-gray-600">Análise personalizada de compatibilidade entre membros.</p>
                </div>

                {{-- Encontro Facilitado --}}
                <div>
                    <img src="/icons/encontro-facilitado.png" alt="Encontro Facilitado" class="mx-auto h-20 mb-4 rounded-lg shadow-md">
                    <h5 class="text-lg font-semibold mb-1">Encontro Facilitado</h5>
                    <p class="text-sm text-gray-600">Acompanhamento e organização dos primeiros encontros.</p>
                </div>

            </div>
        </div>
    </section>

    {{-- TESTEMUNHOS --}}
    <section id="testemunhos" class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-pink-600 mb-10">Testemunhos</h2>
            <blockquote class="text-lg italic text-gray-700 border-l-4 border-pink-400 pl-6">
                “Graças à orientação e ao suporte da equipa, encontrámos um ao outro de uma forma que nunca imaginámos possível.
                Eternamente gratos.”
                <footer class="mt-4 text-sm text-pink-600">Ana & João — Porto</footer>
            </blockquote>
        </div>
    </section>

    {{-- SERVIÇOS / PLANOS --}}
    <section id="planos" class="py-16 bg-pink-50">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-pink-600 mb-10">Os Nossos Planos</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-md p-6 border border-pink-100">
                    <h5 class="text-xl font-semibold text-pink-700 mb-2">Plano Essencial</h5>
                    <p class="text-sm text-gray-600 mb-4">Consultoria + Emparelhamento + 1 evento/mês</p>
                    <p class="text-xl font-bold text-gray-800 mb-4">100€/mês</p>
                    <a href="{{ route('register') }}"
                       class="inline-block px-6 py-2 border border-pink-500 text-pink-500 rounded-lg hover:bg-pink-50 transition">
                        Escolher Plano
                    </a>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 border-2 border-pink-500">
                    <h5 class="text-xl font-semibold text-pink-700 mb-2">Plano Premium</h5>
                    <p class="text-sm text-gray-600 mb-4">Inclui coaching e eventos ilimitados</p>
                    <p class="text-xl font-bold text-gray-800 mb-4">150€/mês</p>
                    <a href="{{ route('register') }}"
                       class="inline-block px-6 py-2 bg-pink-500 text-white font-semibold rounded-lg hover:bg-pink-600 transition">
                        Plano Mais Popular
                    </a>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 border border-pink-100">
                    <h5 class="text-xl font-semibold text-pink-700 mb-2">Plano Exclusivo</h5>
                    <p class="text-sm text-gray-600 mb-4">Atendimento prioritário e matching VIP</p>
                    <p class="text-xl font-bold text-gray-800 mb-4">200€/mês</p>
                    <a href="{{ route('register') }}"
                       class="inline-block px-6 py-2 border border-pink-500 text-pink-500 rounded-lg hover:bg-pink-50 transition">
                        Escolher Plano
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- CHAMADA PARA AÇÃO FINAL --}}
    <section id="cta" class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-6 text-center bg-pink-100 rounded-3xl shadow-xl py-12">
            <h2 class="text-3xl sm:text-4xl font-bold text-pink-700 mb-4">Pronta para dar o próximo passo?</h2>
            <p class="text-lg text-gray-700 mb-8">
                Agende uma consulta gratuita e descubra como podemos ajudar a transformar o seu caminho para o amor.
            </p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                <a href="{{ route('register') }}"
                class="px-6 py-3 bg-pink-600 text-white font-semibold rounded-full shadow hover:bg-pink-700 transition">
                    Marcar Consulta
                </a>

                <form action="#" method="POST" class="flex flex-col sm:flex-row items-center gap-2">
                    @csrf
                    <input type="email" name="newsletter_email" required placeholder="O seu email"
                        class="px-4 py-2 w-72 rounded-full border border-pink-300 focus:ring-2 focus:ring-pink-400 focus:outline-none">
                    <button type="submit"
                            class="px-5 py-2 bg-white border border-pink-600 text-pink-600 font-medium rounded-full hover:bg-pink-50 transition">
                        Subscrever
                    </button>
                </form>
            </div>
        </div>
    </section>

@endsection
