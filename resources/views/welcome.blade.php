@extends('layouts.app')

@section('header-classes', 'bg-transparent')

@section('content')

    <div class="absolute top-0 left-0 w-full h-screen flex items-center justify-center">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1523170335258-f5ed11844a49?q=80&w=2080&auto-format&fit=crop');"></div>
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="relative z-10 text-center px-4">
            <h1 class="text-4xl md:text-6xl font-bold tracking-tight text-white leading-tight">
                L'Arte del Tempo, nelle Mani di un Esperto
            </h1>
            <p class="mt-4 text-lg md:text-xl text-gray-300 max-w-2xl mx-auto">
                Riparazioni, restauro e vendita di orologi di prestigio. La passione che segna ogni istante.
            </p>
            <a href="#servizi" class="mt-8 inline-block bg-white text-gray-900 font-bold py-3 px-8 rounded-lg text-lg hover:bg-gray-200 transition duration-300">
                Scopri i Nostri Servizi
            </a>
        </div>
    </div>
    <div class="relative h-screen"></div>

    <div id="servizi" class="bg-gray-900 py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold leading-7 text-gray-400">La Nostra Esperienza</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Artigiani del Tempo</p>
                <p class="mt-6 text-lg leading-8 text-gray-300">Dalla manutenzione ordinaria al restauro di pezzi storici, trattiamo ogni orologio con la massima cura e precisione.</p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">

                    @foreach ($services as $service)
                        <div class="flex flex-col">
                            <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-white">
                                <div class="h-8 w-8 text-gray-400">
                                    {!! $service->svg_icon !!} {{-- Usiamo {!! !!} per interpretare il codice HTML dell'SVG --}}
                                </div>
                                {{ $service->name }}
                            </dt>
                            <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-300">
                                <p class="flex-auto">{{ $service->description }}</p>
                            </dd>
                        </div>
                    @endforeach

                </dl>
            </div>
        </div>
    </div>
    <div class="bg-gray-900">
        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">

            @foreach ($featuredProducts as $product)
                <div class="group relative">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-800 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-white">
                                <a href="#"> <span aria-hidden="true" class="absolute inset-0"></span>
                                    {{ $product->name }}
                                </a>
                            </h3>
                            {{-- Potremmo aggiungere una sotto-descrizione se volessimo --}}
                        </div>
                        <p class="text-sm font-medium text-white">€{{ number_format($product->price, 2, ',', '.') }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
