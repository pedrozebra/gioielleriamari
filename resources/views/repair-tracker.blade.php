@extends('layouts.app')

@section('title', 'Cerca Riparazione - Rossi Orologiaio')

@section('content')
    <div class="bg-background py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-8 lg:px-16">
            <div class="mx-auto max-w-2xl text-center">
                <h1 class="font-serif text-4xl font-bold text-white sm:text-6xl">Stato Riparazione</h1>
                <p class="mt-4 text-lg leading-8 text-muted">
                    Inserisci il codice che ti è stato fornito sulla ricevuta per visualizzare lo stato di avanzamento del tuo ordine.
                </p>
            </div>

            <form method="GET" action="{{ route('repair.search') }}" class="mt-12 mx-auto max-w-xl">
                <div class="flex items-center gap-x-4">
                    <input type="text" name="code" value="{{ $searchedCode }}" required
                           class="min-w-0 flex-auto rounded-full border-0 bg-white/5 px-5 py-3 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6"
                           placeholder="Il tuo codice di riparazione...">
                    <button type="submit"
                            class="rounded-full bg-primary px-8 py-3 text-sm font-semibold text-background shadow-sm
               transition-all duration-300 ease-in-out hover:scale-105 hover:bg-primary/90 cursor-pointer">
                        Cerca
                    </button>
                </div>
            </form>

            @if ($searchedCode)
                <div class="mt-16 mx-auto max-w-2xl border-t border-white/10 pt-10">
                    @if ($repair)
                        <h3 class="font-serif text-2xl font-bold text-white">Risultati per: {{ $repair->customer_code }}</h3>
                        <dl class="mt-6 space-y-4 text-base text-muted">
                            <div class="flex gap-x-4 pt-4 border-t border-white/5">
                                <dt class="w-32 flex-none font-semibold text-white">Cliente:</dt>
                                <dd>{{ $repair->customer_name }}</dd>
                            </div>
                            <div class="flex gap-x-4 pt-4 border-t border-white/5">
                                <dt class="w-32 flex-none font-semibold text-white">Prodotto:</dt>
                                <dd>{{ $repair->product_details }}</dd>
                            </div>
                            <div class="flex items-center gap-x-4 pt-4 border-t border-white/5">
                                <dt class="w-32 flex-none font-semibold text-white">Stato:</dt>
                                <dd>
                                <span class="inline-flex items-center rounded-md bg-primary/10 px-2 py-1 text-xs font-medium text-primary ring-1 ring-inset ring-primary/20">
                                    {{ $repair->status }}
                                </span>
                                </dd>
                            </div>
                            <div class="flex gap-x-4 pt-4 border-t border-white/5">
                                <dt class="w-32 flex-none font-semibold text-white">Data presunta:</dt>
                                <dd>{{ \Carbon\Carbon::parse($repair->estimated_completion_date)->format('d/m/Y') }}</dd>
                            </div>
                        </dl>
                    @else
                        <p class="text-lg text-primary text-center">Nessuna riparazione trovata con il codice "{{ $searchedCode }}".</p>
                    @endif
                </div>
            @endif
        </div>
    </div>
@endsection
