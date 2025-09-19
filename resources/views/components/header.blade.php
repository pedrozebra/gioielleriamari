<header x-data="{ open: false }">
    <nav class="bg-white border-b" aria-label="Navigazione principale">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center">
                    <button @click="open = !open" aria-label="Menu mobile" class="lg:hidden p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 mr-4"><line x1="4" x2="20" y1="12" y2="12"></line><line x1="4" x2="20" y1="6" y2="6"></line><line x1="4" x2="20" y1="18" y2="18"></line></svg>
                    </button>
                    <a class="flex items-center" href="{{ route('home') }}">
                        <span class="ml-2 text-4xl font-cursive">Gioielleria Antonio Mari</span>
                    </a>
                </div>
                <nav class="hidden lg:flex space-x-8 font-inter" aria-label="Menu principale">
                    <a class="text-gray-700 hover:text-purple-600 transition-colors" href="{{ route('products.category', 'orologi') }}">{{ __('Orologi') }}</a>
                    <a class="text-gray-700 hover:text-purple-600 transition-colors" href="{{ route('products.category', 'gioielli') }}">{{ __('Gioielli') }}</a>
                    <a class="text-gray-700 hover:text-purple-600 transition-colors" href="/chi-siamo">{{ __('Chi Siamo') }}</a>
                    <a class="text-gray-700 hover:text-purple-600 transition-colors" href="/stato-riparazione">{{ __('Cerca Riparazione') }}</a>
                    <a class="text-gray-700 hover:text-purple-600 transition-colors" href="/contatti">{{ __('Contatti') }}</a>
                </nav>
            </div>
        </div>
    </nav>
    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-1"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-1"
         @click.away="open = false"
         class="lg:hidden absolute w-full bg-white shadow-lg z-50"
         style="display: none;">
        <div class="p-6 space-y-4">
            <a class="block text-gray-700 hover:text-purple-600" href="{{ route('products.category', 'orologi') }}">{{ __('Orologi') }}</a>
            <a class="block text-gray-700 hover:text-purple-600" href="{{ route('products.category', 'gioielli') }}">{{ __('Gioielli') }}</a>
            <a class="block text-gray-700 hover:text-purple-600" href="/chi-siamo">{{ __('Chi Siamo') }}</a>
            <a class="block text-gray-700 hover:text-purple-600" href="/stato-riparazione">{{ __('Cerca Riparazione') }}</a>
            <a class="block text-gray-700 hover:text-purple-600" href="/contatti">{{ __('Contatti') }}</a>
        </div>
    </div>
</header>
