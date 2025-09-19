<footer class="bg-gray-900 text-gray-300" role="contentinfo">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            {{-- Brand --}}
            <div>
                <div class="flex items-center">
                    {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 text-purple-400" aria-hidden="true">--}}
                    {{--                                <path d="M6 3h12l4 6-10 13L2 9Z"></path>--}}
                    {{--                                <path d="M11 3 8 9l4 13 4-13-3-6"></path>--}}
                    {{--                                <path d="M2 9h20"></path>--}}
                    {{--                            </svg>--}}
                    <a class="flex items-center" href="{{ route('home') }}">
                        <span class="ml-2 text-4xl font-cursive text-white">Gioielleria Antonio Mari</span>
                    </a>
                </div>
                <p class="mt-4 font-inter text-sm">{{ __('Creando momenti di lusso dal 1976') }}</p>

                {{-- Social Links --}}
                <div class="flex space-x-4 mt-6">
                    @if(config('services.facebook'))
                        <a href="{{ config('services.facebook') }}" class="text-gray-400 hover:text-white">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                    @endif
                    @if(config('services.instagram'))
                        <a href="{{ config('services.instagram') }}" class="text-gray-400 hover:text-white">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987 6.62 0 11.987-5.367 11.987-11.987C24.014 5.367 18.637.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.49-3.323-1.295C4.198 14.553 3.5 13.26 3.5 11.987c0-1.273.698-2.566 1.626-3.706.875-.805 2.026-1.295 3.323-1.295s2.448.49 3.323 1.295c.928 1.14 1.626 2.433 1.626 3.706 0 1.273-.698 2.566-1.626 3.706-.875.805-2.026 1.295-3.323 1.295z"/>
                            </svg>
                        </a>
                    @endif
                </div>
            </div>
            <nav aria-label="Collezioni" class="font-inter">
                <h4 class="text-white font-medium mb-4">{{ __('Collezioni') }}</h4>
                <ul class="space-y-2">
                    <li><a class="hover:text-white transition-colors" href="{{ route('products.category', 'orologi') }}">{{ __('Orologi') }}</a></li>
                    <li><a class="hover:text-white transition-colors" href="{{ route('products.category', 'gioielli') }}">{{ __('Gioielli') }}</a></li>
                    <li><a class="hover:text-white transition-colors" href="#">{{ __('Collezioni') }}</a></li>
                </ul>
            </nav>
            <nav aria-label="Azienda" class="font-inter">
                <h4 class="text-white font-medium mb-4">{{ __('Azienda') }}</h4>
                <ul class="space-y-2">
                    <li><a class="hover:text-white transition-colors" href="/chi-siamo"">{{ __('Chi Siamo') }}</a></li>
                    <li><a class="hover:text-white transition-colors" href="/contatti">{{ __('Contatti') }}</a></li>
                    <li><a class="hover:text-white transition-colors" href="/stato-riparazione">{{ __('Cerca Riparazione') }}</a></li>
                </ul>
            </nav>
        </div>
        <div class="border-t border-gray-800 mt-12 pt-8 text-sm text-center font-inter">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Gioielleria Mari') }}. {{ __('Tutti i diritti riservati.') }}</p>
            <div class="mt-2 space-x-4">
                <a href="#" class="hover:text-white transition-colors">{{ __('Privacy Policy') }}</a>
                <a href="#" class="hover:text-white transition-colors">{{ __('Termini di Servizio') }}</a>
                <a href="#" class="hover:text-white transition-colors">{{ __('Cookie Policy') }}</a>
            </div>
        </div>
    </div>
</footer>
