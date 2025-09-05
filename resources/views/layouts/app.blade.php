<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Gioielleria Mari')</title>
    <meta name="description" content="@yield('meta-description', 'Riparazione e vendita di orologi di prestigio.')">

    @include('partials.seo-tags')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@700&family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-background text-foreground font-sans antialiased">

<header x-data="{ atTop: true, open: false }" @scroll.window="atTop = (window.scrollY < 10)"
        class="fixed top-0 left-0 right-0 z-30 transition-colors duration-300"
        :class="{ 'bg-transparent': atTop, 'bg-background/80 backdrop-blur-lg shadow-lg': !atTop }">
    <nav class="mx-auto max-w-7xl px-8 lg:px-16" aria-label="Top">
        <div class="flex w-full items-center justify-between py-6">
            <div class="flex items-center">
                <a href="/" class="text-2xl font-serif font-bold text-white">Gioielleria Mari</a>
            </div>
            <div class="hidden lg:flex lg:items-center lg:space-x-8">
                @if(!Request::is('/'))
                    <a href="/" class="text-sm font-medium uppercase tracking-wider text-muted hover:text-white transition-colors">Home</a>
                @endif
                <a href="/chi-siamo" class="text-sm font-medium uppercase tracking-wider text-muted hover:text-white transition-colors">Chi Siamo</a>
                <a href="/prodotti" class="text-sm font-medium uppercase tracking-wider text-muted hover:text-white transition-colors">Prodotti</a>
                <a href="{{ route('repair.search') }}" class="text-sm font-medium uppercase tracking-wider text-muted hover:text-white transition-colors">Stato Riparazione</a>
                <a href="/contatti" class="text-sm font-medium uppercase tracking-wider text-muted hover:text-white transition-colors">Contatti</a>
            </div>
            <div class="lg:hidden">
                <button @click="open = !open" type="button" class="p-2 text-muted hover:text-white focus:outline-none">
                    <svg x-show="!open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" /></svg>
                    <svg x-show="open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
        </div>
    </nav>
    <div x-show="open" @click.away="open = false" class="lg:hidden bg-background/95 backdrop-blur-lg py-4" style="display: none;">
        @if(!Request::is('/'))
            <a href="/" class="block py-2 px-8 text-base text-muted hover:text-white">Home</a>
        @endif
        <a href="/chi-siamo" class="block py-2 px-8 text-base text-muted hover:text-white">Chi Siamo</a>
        <a href="/prodotti" class="block py-2 px-8 text-base text-muted hover:text-white">Prodotti</a>
        <a href="/contatti" class="block py-2 px-8 text-base text-muted hover:text-white">Contatti</a>
        <a href="{{ route('repair.search') }}" class="block py-2 px-8 text-base text-muted hover:text-white">Stato Riparazione</a>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer class="bg-dark-surface border-t border-white/10" aria-labelledby="footer-heading">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="mx-auto max-w-7xl px-6 pb-8 pt-16 sm:pt-24 lg:px-8 lg:pt-32">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="space-y-4">
                    <h3 class="text-2xl font-bold text-white">Gioielleria Mari</h3>
                    <p class="text-sm leading-6 text-gray-300">
                        Passione e precisione al servizio del tempo. Dal 1976, la cura per ogni dettaglio.
                    </p>
                </div>
                <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>

                            <ul role="list" class="mt-6 space-y-4">
                                <li><a href="/" class="text-sm leading-6 text-gray-300 hover:text-white">Home</a></li>
                                <li><a href="/chi-siamo" class="text-sm leading-6 text-gray-300 hover:text-white">Chi Siamo</a></li>
                                <li><a href="/prodotti" class="text-sm leading-6 text-gray-300 hover:text-white">Prodotti</a></li>
                                <li><a href="{{ route('repair.search') }}" class="text-sm leading-6 text-gray-300 hover:text-white">Stato Riparazione </a></li>
                                <li><a href="/contatti" class="text-sm leading-6 text-gray-300 hover:text-white">Contatti</a></li>
                            </ul>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-sm font-semibold leading-6 text-white">Contatti</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li class="text-sm leading-6 text-gray-300">Via Francesco Turco, 35<br>Battipaglia, SA 84091</li>
                                <li class="text-sm leading-6 text-gray-300 hover:text-white"><a href="mailto:info@gioielleriamari.it">info@gioielleriamari.it</a></li>
                                <li class="text-sm leading-6 text-gray-300 hover:text-white"><a href="tel:+390828308073">0828 308073</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-16 border-t border-white/10 pt-8 sm:mt-20 lg:mt-24 lg:flex lg:items-center lg:justify-between">
                <div>
                    <h3 class="text-sm font-semibold leading-6 text-white">Seguici sui social</h3>
                    <div class="mt-4 flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-gray-300"><span class="sr-only">Facebook</span><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg></a>
                        <a href="#" class="text-gray-400 hover:text-gray-300"><span class="sr-only">Instagram</span><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 012.153 2.153c.247.636.416 1.363.465 2.427.048 1.024.06 1.378.06 3.808s-.012 2.784-.06 3.808c-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-2.153-2.153c-.636.247-1.363.416-2.427.465-1.024.048-1.378.06-3.808.06s-2.784-.013-3.808-.06c-1.064-.049-1.791.218-2.427-.465a4.902 4.902 0 01-2.153-2.153c-.247-.636-.416-1.363-.465-2.427-.048-1.024-.06-1.378-.06-3.808s.012-2.784.06-3.808c.049 1.064.218 1.791.465 2.427a4.902 4.902 0 012.153-2.153c.636-.247 1.363-.416 2.427.465C9.53 2.013 9.885 2 12.315 2zM12 7a5 5 0 100 10 5 5 0 000-10zm0 8a3 3 0 110-6 3 3 0 010 6zm5.25-9.75a1.25 1.25 0 100-2.5 1.25 1.25 0 000 2.5z" clip-rule="evenodd" /></svg></a>
                    </div>
                </div>
                <p class="mt-8 text-xs leading-5 text-gray-400 md:order-1 md:mt-0">&copy; {{ date('Y') }} Gioielleria Mari di Antonio Mari. Tutti i diritti sono riservati.</p>
            </div>
        </div>
    </footer>
</body>
</html>
