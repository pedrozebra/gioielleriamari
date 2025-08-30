<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Rossi Orologiaio')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-white antialiased">

<header class="@yield('header-classes', 'bg-gray-800 shadow') relative z-30">
<nav class="mx-auto max-w-7xl px-6 lg:px-8" aria-label="Top">
        <div class="flex w-full items-center justify-between border-b border-gray-700 py-6 lg:border-none">
            <div class="flex items-center">
                <a href="/" class="text-xl font-bold text-white">Rossi Orologiaio</a>
            </div>
            <div class="ml-10 space-x-8">
                <a href="/" class="text-base font-medium text-white hover:text-gray-300">Home</a>
                <a href="{{ route('chi-siamo') }}" class="text-base font-medium text-white hover:text-gray-300">Chi Siamo</a>
                <a href="{{ route('prodotti') }}" class="text-base font-medium text-white hover:text-gray-300">Prodotti</a>
                <a href="{{ route('contatti') }}" class="text-base font-medium text-white hover:text-gray-300">Contatti</a>
            </div>
        </div>
    </nav>
</header>
<main>
    @yield('content')
</main>
<footer class="bg-gray-800" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl px-6 pb-8 pt-16 sm:pt-24 lg:px-8 lg:pt-32">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="space-y-4">
                <h3 class="text-2xl font-bold text-white">Rossi Orologiaio</h3>
                <p class="text-sm leading-6 text-gray-300">
                    Passione e precisione al servizio del tempo. Dal 1980, la cura per ogni dettaglio.
                </p>
            </div>
            <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold leading-6 text-white">Navigazione</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li><a href="/" class="text-sm leading-6 text-gray-300 hover:text-white">Home</a></li>
                            <li><a href="/#servizi" class="text-sm leading-6 text-gray-300 hover:text-white">Servizi</a></li>
                            <li><a href="#" class="text-sm leading-6 text-gray-300 hover:text-white">Prodotti</a></li>
                        </ul>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm font-semibold leading-6 text-white">Contatti</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li class="text-sm leading-6 text-gray-300">Via Roma, 123<br>Battipaglia, SA 84091</li>
                            <li class="text-sm leading-6 text-gray-300 hover:text-white">info@rossiorologi.it</li>
                            <li class="text-sm leading-6 text-gray-300 hover:text-white">+39 0828 123456</li>
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
            <p class="mt-8 text-xs leading-5 text-gray-400 md:order-1 md:mt-0">&copy; {{ date('Y') }} Rossi Orologiaio. Tutti i diritti riservati.</p>
        </div>
    </div>
</footer>
</body>
</html>
