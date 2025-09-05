@extends('layouts.app')
@section('title', $page->meta_title ?? $page->title)
@section('meta-description', $page->meta_description)

@section('content')
    <div class="bg-background py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-8 lg:px-16">
            <div class="mx-auto max-w-3xl lg:mx-0">
                <h1 class="text-base font-semibold leading-7 text-primary">La Nostra Storia</h1>
                <p class="mt-6 text-lg leading-8 text-muted">
                    Fondata nel 1976 da Antonio Mari, la nostra bottega è nata da una profonda passione per l'alta orologeria. Quella che era iniziata come una piccola attività di riparazione è cresciuta fino a diventare un punto di riferimento per collezionisti e amanti degli orologi di prestigio.
                </p>
                <p class="mt-6 text-lg leading-8 text-muted">
                    Specializzati nella riparazione di orologi antichi e moderni, effettuiamo anche riparazioni di oreficeria, incisioni e infilatura di collane.
                </p>
                <p class="mt-6 text-lg leading-8 text-muted">
                    Possiamo affermare che i prezzi relativi alle nostre lavorazioni sono più bassi di quelli che normalmente vengono pagati in altri negozi, a parità di caratteristiche, in quanto non ci sono intermediari e le lavorazioni vengono fatte in sede.
                </p>
            </div>
            <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div class="lg:pr-8 lg:pt-4">
                    <div class="lg:max-w-lg">
                        <h2 class="text-base font-semibold leading-7 text-primary">La Nostra Missione</h2>
                        <p class="mt-2 font-serif text-3xl font-bold tracking-tight text-white sm:text-4xl">Precisione e Tradizione</p>
                        <p class="mt-6 text-lg leading-8 text-muted">
                            La nostra missione è preservare l'arte e la scienza dell'orologeria. Ogni orologio che entra nel nostro laboratorio viene trattato non come un semplice oggetto, ma come un'eredità da custodire. Combiniamo tecniche artigianali tradizionali con le più moderne tecnologie per garantire risultati impeccabili.
                        </p>
                    </div>
                </div>

                @if($page->featured_image)
                    <img src="{{ asset('storage/' . $page->featured_image) }}" alt="{{ $page->title }}" class="w-full max-w-none rounded-2xl shadow-xl ring-1 ring-white/10 sm:w-[57rem] md:-ml-4 lg:-ml-0">
                @endif
            </div>
        </div>
    </div>
@endsection
