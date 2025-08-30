@extends('layouts.app')

@section('title', 'Chi Siamo - Rossi Orologiaio')

@section('content')

    <div class="bg-gray-900 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">La Nostra Storia</h2>
                <p class="mt-6 text-lg leading-8 text-gray-300">
                    Fondata nel 1980 da Mario Rossi, la nostra bottega è nata da una profonda passione per l'alta orologeria. Quella che era iniziata come una piccola attività di riparazione è cresciuta fino a diventare un punto di riferimento per collezionisti e amanti degli orologi di prestigio in tutta la regione.
                </p>
            </div>
            <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div class="lg:pr-8 lg:pt-4">
                    <div class="lg:max-w-lg">
                        <h3 class="text-base font-semibold leading-7 text-gray-400">La Nostra Missione</h3>
                        <p class="mt-2 text-2xl font-bold tracking-tight text-white">Precisione e Tradizione</p>
                        <p class="mt-6 text-gray-300">
                            La nostra missione è preservare l'arte e la scienza dell'orologeria. Ogni orologio che entra nel nostro laboratorio viene trattato non come un semplice oggetto, ma come un'eredità da custodire. Combiniamo tecniche artigianali tradizionali con le più moderne tecnologie per garantire risultati impeccabili.
                        </p>
                    </div>
                </div>
                <img src="https://images.pexels.com/photos/8543325/pexels-photo-8543325.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Orologiaio al lavoro sul suo banco da lavoro." class="w-full max-w-none rounded-2xl shadow-xl ring-1 ring-white/10 sm:w-[57rem] md:-ml-4 lg:-ml-0" width="2432" height="1442">
            </div>
        </div>
    </div>
@endsection
