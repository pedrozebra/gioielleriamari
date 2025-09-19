@extends('layouts.app')

@section('title', $product->meta_title ?? $product->name)
@section('description', $product->meta_description)
{{-- Qui puoi aggiungere anche i tag OG specifici per il prodotto --}}

@section('content')
    <main class="font-inter">
        <section class="bg-white border-b">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <div class="flex items-center space-x-2 text-sm text-gray-500">
                    <a href="/" class="hover:text-purple-600">Home</a>
                    <span>/</span>
                    <a href="/prodotti" class="hover:text-purple-600">Prodotti</a>
                    <span>/</span>
                    <span class="text-gray-900">{{ $product->name }}</span>
                </div>
            </div>
        </section>

        <section class="py-12 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <div>
                        <div class="bg-white rounded-2xl overflow-hidden mb-4">
                            <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" class="w-full h-auto object-cover">
                        </div>
                        {{-- Qui in futuro potremmo aggiungere una galleria di thumbnail --}}
                    </div>

                    <div>
                        <div class="bg-white rounded-2xl p-8">
                            <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $product->name }}</h1>

                            @if($product->price > 0)
                                <div class="mb-6 p-4 bg-purple-50 rounded-lg">
                                    <div class="text-3xl font-bold text-purple-600">€{{ number_format($product->price, 2, ',', '.') }}</div>
                                </div>
                            @endif
                            <div class="mb-6">
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Descrizione</h3>
                                <div class="prose text-gray-600">
                                    {!! $product->description !!}
                                </div>
                            </div>

                            <div class="mt-8">
                                <a href="/contatti" class="w-full block text-center btn-primary text-lg hover:text-purple-600">
                                    Richiedi Informazioni
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @if($relatedProducts->isNotEmpty())
            <section class="py-16 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8">Potrebbero interessarti anche</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        @foreach($relatedProducts as $related)
                            <article class="card card-hover group shadow-md">
                                <div class="relative overflow-hidden rounded-t-lg">
                                    <a href="{{ route('products.show', $related) }}">
                                        <img src="{{ asset('storage/' . $related->image_path) }}"
                                             alt="{{ $related->name }}"
                                             class="w-full h-72 object-cover transition-transform duration-300 group-hover:scale-105">
                                    </a>
                                </div>

                                <div class="p-6">
                                    <h3 class="text-xl font-semibold text-gray-900 mb-2">
                                        <a href="{{ route('products.show', $related) }}" class="hover:text-purple-600 transition-colors">
                                            {{ $related->name }}
                                        </a>
                                    </h3>
                                    <div class="flex justify-between items-center">
                                        <span class="text-2xl font-bold text-gray-900">@if($related->price > 0) €{{ number_format($related->price, 2, ',', '.') }} @endif</span>
                                        <a href="{{ route('products.show', $related) }}" class="btn-outline text-sm py-2 px-4 hover:text-purple-600">
                                            Dettagli
                                        </a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    </main>
@endsection
