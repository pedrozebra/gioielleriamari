@extends('layouts.app')

@section('title', 'Gioielleria Antonio Mari')
@section('description', 'Scopri la nostra collezione curata di orologi di lusso e gioielli, dove l\'artigianalità incontra la raffinatezza.')

@section('content')
    <div class="min-h-screen bg-white">
            <section class="relative" aria-label="Banner principale">
                <div class="absolute inset-0">
                    <img class="w-full h-[600px] object-cover" src="https://images.unsplash.com/photo-1523170335258-f5ed11844a49?auto=format&amp;fit=crop&amp;q=80" alt="Vetrina di orologi di lusso" loading="eager">
                    <div class="absolute inset-0 bg-gray-900 opacity-40"></div>
                </div>
                <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
                    <h1 class="text-4xl font-serif text-white sm:text-5xl lg:text-6xl">Eleganza Senza Tempo</h1>
                    <p class="mt-6 text-xl text-gray-100 max-w-3xl">Scopri la nostra collezione curata di orologi di lusso e gioielli, dove l'artigianalità incontra la raffinatezza.</p>
                    <div class="mt-10">
                        <a class="inline-block bg-purple-600 px-8 py-3 text-white font-medium hover:bg-purple-700 transition-colors" href="/collezioni" data-discover="true">Esplora la Collezione</a>
                    </div>
                </div>
            </section>

            <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16" aria-label="Categorie in evidenza">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <a class="relative group cursor-pointer" href="{{ route('products.category', 'orologi') }}" data-discover="true">
                        <img src="https://images.unsplash.com/photo-1509941943102-10c232535736?auto=format&amp;fit=crop&amp;q=80" alt="Collezione Orologi di Lusso" class="w-full h-[400px] object-cover" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent group-hover:from-black/70 group-hover:via-black/50 transition-all duration-300">
                            <div class="absolute bottom-8 left-8">
                                <h2 class="text-white text-2xl font-serif">Orologi</h2>
                                <p class="text-gray-200 mt-2">Esplora la nostra collezione</p>
                            </div>
                        </div>
                    </a>
                    <a class="relative group cursor-pointer" href="{{ route('products.category', 'gioielli') }}" data-discover="true">
                        <img src="https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?auto=format&amp;fit=crop&amp;q=80" alt="Collezione Gioielli Raffinati" class="w-full h-[400px] object-cover" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent group-hover:from-black/70 group-hover:via-black/50 transition-all duration-300">
                            <div class="absolute bottom-8 left-8">
                                <h2 class="text-white text-2xl font-serif">Gioielli</h2>
                                <p class="text-gray-200 mt-2">Scopri l'eleganza</p>
                            </div>
                        </div>
                    </a>
                </div>
            </section>
        <section class="mt-24 bg-gray-50 py-16 rounded-lg">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-3xl cormorant-title text-center text-gray-900 mb-6">
                    Artigiani del Tempo
                </h2>
                <p class="mt-2 text-lg leading-8 text-gray-700 text-center mb-6">Dalla manutenzione ordinaria al restauro di pezzi storici, trattiamo ogni orologio con la massima cura e precisione.</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach ($services as $service)
                        <div class="text-center">
                            <div class="inline-block p-4 bg-white rounded-full shadow-sm">
                                <i data-lucide="{{ $service->svg_icon }}" class="h-8 w-8 text-gray-900"></i>
                            </div>
                            <h3 class="mt-4 text-xl cormorant-title text-gray-900">{{ $service->name }}</h3>
                            <p class="mt-2 font-inter text-gray-500">{{ $service->description }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="bg-white py-16" aria-label="Prodotti in evidenza">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                @if($featuredProducts->isNotEmpty())
                    <h2 class="text-3xl font-serif text-center mb-12">{{ __('In Evidenza') }}</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                        @foreach($featuredProducts as $product)
                            <article class="card card-hover group">
                                <div class="relative overflow-hidden rounded-t-lg">
                                    <a href="{{ route('products.show', $product) }}">
                                        <img src="{{ asset('storage/' . $product->image_path) }}"
                                             alt="{{ $product->name }}"
                                             class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-105"
                                             loading="lazy">
                                        <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-10 transition-opacity"></div>
                                    </a>
                                </div>
                                <div class="p-4">
                                    <h3 class="font-serif text-lg text-gray-900">
                                        <a href="{{ route('products.show', $product) }}" class="hover:text-purple-600">
                                            {{ $product->name }}
                                        </a>
                                    </h3>
                                    <div class="flex items-center mt-1">
                                        @if($product->price > 0)
                                            <span class="text-gray-900 font-semibold">€{{ number_format($product->price, 2, ',', '.') }}</span>
                                        @endif
                                    </div>
                                    <a href="{{ route('products.show', $product) }}"
                                       class="mt-2 inline-block text-gray-600 hover:text-gray-900 text-sm font-medium">
                                        {{ __('Visualizza dettagli') }}
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    </div>

                    <div class="text-center mt-12">
                        <a href="/prodotti" class="btn-outline hover:text-purple-800 ">
                            {{ __('Visualizza Tutti i Prodotti') }}
                        </a>
                    </div>
                @endif

            </div>
        </section>
    <div id="mobile-menu" class="lg:hidden fixed inset-0 bg-black opacity-50 z-50 hidden">
        <div class="bg-white w-64 h-full shadow-xl">
            <div class="p-6">
                <div class="flex justify-between items-center mb-8">
                    <span class="text-xl font-serif">Menu</span>
                    <button id="close-mobile-menu">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                            <path d="m18 6-12 12"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <nav class="space-y-4">
                    <a class="block text-gray-700 hover:text-purple-600" href="#">{{ __('Orologi') }}</a>
                    <a class="block text-gray-700 hover:text-purple-600" href="#">{{ __('Gioielli') }}</a>
                    <a class="block text-gray-700 hover:text-purple-600" href="#">{{ __('Collezioni') }}</a>
                    <a class="block text-gray-700 hover:text-purple-600" href="#">{{ __('Chi Siamo') }}</a>
                    <a class="block text-gray-700 hover:text-purple-600" href="#">{{ __('Contatti') }}</a>
                </nav>
            </div>
        </div>
    </div>
@endsection
