@extends('layouts.app')

@section('header-classes', 'bg-transparent')

@section('content')

    <div class="relative min-h-screen flex items-center justify-center text-center px-4">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1523170335258-f5ed11844a49?q=80&w=2080&auto=format&fit=crop');"></div>
        <div class="absolute inset-0 bg-black/70"></div>
        <div class="relative z-10">
            <h1 class="font-serif text-5xl md:text-8xl font-bold text-white tracking-tight">
                L'Arte del Tempo
            </h1>
            <p class="mt-4 text-lg md:text-xl text-muted max-w-2xl mx-auto">
                Riparazioni, restauro e vendita di orologi di prestigio. La passione che segna ogni istante.
            </p>
            <a href="#servizi" class="mt-8 inline-block bg-primary text-background font-bold py-3 px-12 rounded-full text-lg hover:bg-opacity-90 transition-transform hover:scale-105">
                Scopri di più
            </a>
        </div>
    </div>
    <div id="servizi" class="bg-background py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-8 lg:px-16 text-center">
            <h2 class="font-serif text-4xl font-bold text-white">Artigiani del Tempo</h2>
            <p class="mt-4 text-lg leading-8 text-muted mx-auto max-w-3xl">
                Dalla manutenzione ordinaria al restauro di pezzi storici, trattiamo ogni orologio con la massima cura e precisione, preservando un'eredità di valore.
            </p>
            <div class="mt-16 border-t border-white/10 pt-16">
                <dl class="grid grid-cols-1 gap-y-16 lg:grid-cols-3 text-left">
                    @foreach ($services as $service)
                        <div class="flex flex-col gap-y-3">
                            <dt class="text-base font-semibold leading-7 text-white flex items-center gap-x-3">
                                <span class="h-10 w-10 flex items-center justify-center rounded-lg bg-primary/10 text-primary">
                                    {!! $service->svg_icon !!}
                                </span>
                                {{ $service->name }}
                            </dt>
                            <dd class="text-base leading-7 text-muted">{{ $service->description }}</dd>
                        </div>
                    @endforeach
                </dl>
            </div>
        </div>
    </div>
    <div class="bg-background py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-8 lg:px-16">
            <h2 class="font-serif text-4xl font-bold text-white text-center">Le Nostre Proposte</h2>
            <div class="mt-16 grid grid-cols-1 gap-y-12 sm:grid-cols-2 lg:grid-cols-4 sm:gap-x-8">
                @foreach ($featuredProducts as $product)
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
