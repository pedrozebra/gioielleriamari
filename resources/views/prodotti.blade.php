@extends('layouts.app')

@section('title', 'Gioielleria Mari - Prodotti')

@section('content')

    <div class="bg-gray-900">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">La Nostra Collezione</h2>
            <p class="mt-4 text-lg text-gray-300">Una selezione di pezzi unici, scelti per la loro qualità, storia e bellezza senza tempo.</p>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">

                @foreach ($products as $product)
                    <div class="group">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-800 xl:aspect-h-8 xl:aspect-w-7">
                            {{-- Usiamo l'asset helper per l'immagine --}}
                            <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" class="h-full w-full object-cover object-center group-hover:opacity-75">
                        </div>
                        <h3 class="mt-4 text-sm text-white">{{ $product->name }}</h3>
                        <p class="mt-1 text-lg font-medium text-white">€{{ number_format($product->price, 2, ',', '.') }}</p>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection
