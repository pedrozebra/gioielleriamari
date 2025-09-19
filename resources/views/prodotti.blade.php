@extends('layouts.app')

@section('title', 'La Nostra Collezione')
@section('description', 'Esplora la collezione completa di orologi e gioielli di Gioielleria Mari. Pezzi unici che raccontano una storia di eccellenza.')

@section('content')
    <main class="font-inter">
        <section class="bg-gray-50 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">La Nostra Collezione</h1>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Ogni pezzo è selezionato o creato con la massima cura, unendo un design senza tempo alla più alta maestria artigianale.
                </p>
            </div>
        </section>

        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-10 gap-y-16">

                    @forelse ($products as $product)
                        <article class="card card-hover group">
                            <div class="relative overflow-hidden">
                                <a href="{{ route('products.show', $product) }}">
                                    <img src="{{ asset('storage/' . $product->image_path) }}"
                                         alt="{{ $product->name }}"
                                         class="w-full h-72 object-cover object-center transition-transform duration-300 group-hover:scale-105"
                                         loading="lazy">
                                </a>
                                @if($product->is_featured)
                                    <span class="absolute top-4 left-4 bg-white/80 backdrop-blur-sm text-purple-800 border border-purple-600 px-3 py-1 text-xs rounded-full font-semibold uppercase tracking-wider shadow-sm">
                                        In Vetrina
                                    </span>
                                @endif
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">
                                    <a href="{{ route('products.show', $product) }}" class="hover:text-purple-600 transition-colors">
                                        {{ $product->name }}
                                    </a>
                                </h3>
                                <p class="text-gray-600 mb-4 text-sm">{{ Str::limit($product->description, 70) }}</p>
                                <div class="flex justify-between items-center">
                                    @if($product->price > 0)
                                        <span class="text-2xl font-bold text-gray-900">€{{ number_format($product->price, 2, ',', '.') }}</span>
                                    @endif
                                    <a href="{{ route('products.show', $product) }}" class="btn-outline text-sm py-2 hover:text-purple-600">
                                        Dettagli
                                    </a>
                                </div>
                            </div>
                        </article>
                    @empty
                        <div class="md:col-span-2 lg:col-span-3 text-center py-12">
                            <i data-lucide="package-x" class="h-16 w-16 mx-auto text-gray-300"></i>
                            <p class="mt-4 text-gray-500 text-lg">Al momento non ci sono prodotti in questa categoria.</p>
                        </div>
                    @endforelse

                </div>
            </div>
        </section>

        <section class="bg-gray-50 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="text-3xl font-serif text-gray-900">La Nostra Garanzia</h2>
                    <p class="mt-4 text-lg text-gray-500">
                        Ogni pezzo viene fornito con una garanzia internazionale e un certificato di autenticità.
                    </p>
                </div>
                <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <i data-lucide="shield" class="h-8 w-8 text-purple-600 mb-4"></i>
                        <h3 class="text-lg font-medium text-gray-900">Garanzia Estesa</h3>
                        <p class="mt-2 text-gray-500">Protezione completa su tutti i nostri prodotti.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <i data-lucide="award" class="h-8 w-8 text-purple-600 mb-4"></i>
                        <h3 class="text-lg font-medium text-gray-900">Certificato di Autenticità</h3>
                        <p class="mt-2 text-gray-500">Ogni pezzo include un certificato numerato di autenticità.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <i data-lucide="settings" class="h-8 w-8 text-purple-600 mb-4"></i>
                        <h3 class="text-lg font-medium text-gray-900">Servizio Post-Vendita</h3>
                        <p class="mt-2 text-gray-500">Assistenza tecnica specializzata e manutenzione.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
