<footer class="bg-pink-100 text-gray-700 mt-16 dark:bg-gray-900 dark:text-gray-300">
    <div class="max-w-7xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-4 gap-8">

        {{-- Logo & Missão --}}
        <div class="text-center md:text-left">
            <a href="{{ route('home') }}" class="inline-block mb-4">
                <picture>
                    <source srcset="/images/logo-footer-white.png" media="(prefers-color-scheme: light)">
                    <img src="/images/logo-footer-transparent.png" alt="Logo Amor & Conexão"
                         class="mx-auto h-24 md:h-32 w-auto mb-6">
                </picture>
            </a>
            <p class="text-sm leading-relaxed">
                Conectamos pessoas com base em valores reais, empatia e intenção. O amor começa com propósito.
            </p>
        </div>

        {{-- Menu Rápido --}}
        <div>
            <h5 class="font-semibold mb-2 text-pink-700 dark:text-pink-300">Navegação</h5>
            <ul class="space-y-1 text-sm">
                <li><a href="{{ route('home') }}" class="hover:underline">Início</a></li>
                <li><a href="{{ route('home') }}#sobre-nos" class="hover:underline">Sobre Nós</a></li>
                <li><a href="{{ route('home') }}#como-funciona" class="hover:underline">Como Funciona</a></li>
                <li><a href="{{ route('home') }}#planos" class="hover:underline">Planos</a></li>
            </ul>
        </div>

        {{-- Recursos Legais --}}
        <div>
            <h5 class="font-semibold mb-2 text-pink-700 dark:text-pink-300">Legal</h5>
            <ul class="space-y-1 text-sm">
                <li><a href="{{ route('terms') }}" class="hover:underline">Termos de Uso</a></li>
                <li><a href="{{ route('privacy') }}" class="hover:underline">Política de Privacidade</a></li>
                <li><a href="{{ route('contact') }}" class="hover:underline">Contactos</a></li>
            </ul>
        </div>

        {{-- Newsletter --}}
        <div>
            <h5 class="font-semibold mb-2 text-pink-700 dark:text-pink-300">Receba novidades</h5>
            <form action="#" method="POST" class="flex flex-col gap-2">
                @csrf
                <input type="email" name="footer_email" placeholder="O seu email"
                       class="px-4 py-2 rounded-md border border-pink-300 focus:ring-2 focus:ring-pink-400 focus:outline-none">
                <button type="submit"
                        class="bg-pink-500 text-white px-4 py-2 rounded-md hover:bg-pink-600 transition">
                    Subscrever
                </button>
            </form>
        </div>
    </div>

    <div class="text-center text-sm text-gray-500 mt-8 pb-6 dark:text-gray-400">
        &copy; {{ date('Y') }} Amor & Conexão. Todos os direitos reservados.
    </div>
</footer>
