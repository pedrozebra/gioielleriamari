@extends('layouts.app')

@section('title', 'Gioielleria Mari - Prodotti')

@section('content')

    <div class="bg-background py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-8 lg:px-16">
            <div class="text-center">
                <h1 class="font-serif text-4xl font-bold text-white sm:text-6xl">La Nostra Collezione</h1>
                <p class="mt-4 text-lg leading-8 text-muted mx-auto max-w-2xl">
                    Una selezione di pezzi unici, scelti per la loro qualità, storia e bellezza senza tempo.
                </p>
            </div>

            <div class="mt-16 grid grid-cols-1 gap-y-12 sm:grid-cols-2 lg:grid-cols-4 sm:gap-x-8">
                @foreach ($products as $product)
                    <div class="group relative">
                        <div class="aspect-square w-full overflow-hidden rounded-lg">
                            <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" class="h-full w-full object-cover object-center group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <h3 class="mt-4 text-base font-semibold text-white">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                {{ $product->name }}
                            </a>
                        </h3>
                        <p class="mt-1 text-lg font-medium text-primary">€{{ number_format($product->price, 2, ',', '.') }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
