<nav x-data="{ open: false }" class="bg-white border-b border-pink-200 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Ajuste vertical mais compacto -->
        <div class="flex justify-between py-2 md:py-3 items-center">

            {{-- Logo --}}
            <div class="flex items-center gap-4">
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    <picture>
                        <source srcset="/images/logo-footer-white.png" media="(prefers-color-scheme: light)">
                        <img src="/images/logo-footer-transparent.png" alt="Logo Amor & Conexão"
                            class="h-14 md:h-20 lg:h-24 w-auto">
                    </picture>
                </a>
            </div>

            {{-- Menu Desktop --}}
            <div class="hidden md:flex space-x-8 items-center">
                <a href="{{ route('home') }}" class="text-sm font-medium text-gray-700 hover:text-pink-600">Início</a>
                <a href="{{ route('home') }}#sobre-nos" class="text-sm font-medium text-gray-700 hover:text-pink-600">Sobre</a>
                <a href="{{ route('home') }}#como-funciona" class="text-sm font-medium text-gray-700 hover:text-pink-600">Como Funciona</a>
                <a href="{{ route('home') }}#planos" class="text-sm font-medium text-gray-700 hover:text-pink-600">Planos</a>
                <a href="{{ route('contact') }}" class="text-sm font-medium text-gray-700 hover:text-pink-600">Contactos</a>
            </div>

            {{-- Login/Register Desktop --}}
            <div class="hidden md:flex items-center gap-4">
                @auth
                    <a href="{{ route('dashboard') }}" class="text-sm text-pink-700 font-semibold hover:underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 hover:text-pink-600">Entrar</a>
                    <a href="{{ route('register') }}" class="px-4 py-2 bg-pink-600 text-white text-sm font-medium rounded-full hover:bg-pink-700">Registar</a>
                @endauth
            </div>

            {{-- Botão Mobile --}}
            <div class="md:hidden flex items-center">
                <button @click="open = ! open" class="text-gray-700 hover:text-pink-600 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Menu Mobile Expandido --}}
    <div x-show="open" class="md:hidden px-4 pt-4 pb-6 space-y-2">
        <a href="{{ route('home') }}" class="block text-sm text-gray-700 hover:text-pink-600">Início</a>
        <a href="{{ route('home') }}#sobre-nos" class="block text-sm text-gray-700 hover:text-pink-600">Sobre</a>
        <a href="{{ route('home') }}#como-funciona" class="block text-sm text-gray-700 hover:text-pink-600">Como Funciona</a>
        <a href="{{ route('home') }}#planos" class="block text-sm text-gray-700 hover:text-pink-600">Planos</a>
        <a href="{{ route('contact') }}" class="block text-sm text-gray-700 hover:text-pink-600">Contactos</a>

        <div class="mt-4 border-t border-gray-200 pt-4">
            @auth
                <a href="{{ route('dashboard') }}" class="block text-sm text-pink-700 font-semibold">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="block text-sm text-gray-700 hover:text-pink-600">Entrar</a>
                <a href="{{ route('register') }}" class="block mt-2 px-4 py-2 text-center bg-pink-600 text-white rounded-full hover:bg-pink-700">Registar</a>
            @endauth
        </div>
    </div>
</nav>
