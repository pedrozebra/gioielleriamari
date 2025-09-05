@extends('layouts.app')

@section('title', 'Contatti - Gioielleria Mari')
@section('meta-description', 'Contattaci per informazioni, preventivi o per qualsiasi altra richiesta. Siamo a tua disposizione.')

@section('content')
    <div class="bg-background py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-8 lg:px-16">
            <div class="mx-auto max-w-2xl text-center">
                <h1 class="font-serif text-4xl font-bold text-white sm:text-6xl">Contattaci</h1>
                <p class="mt-4 text-lg leading-8 text-muted">
                    Hai una domanda o un progetto in mente? Siamo qui per aiutarti. Compila il modulo qui sotto o vieni a trovarci in negozio.
                </p>
            </div>

            <form action="{{ route('contact.store') }}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
                @csrf

                @if (session('success'))
                    <div class="my-6 rounded-md bg-primary/10 p-4 text-sm font-medium text-primary">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                    <div>
                        <label for="first_name" class="block text-sm font-semibold leading-6 text-white">Nome</label>
                        <div class="mt-2.5">
                            <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="last_name" class="block text-sm font-semibold leading-6 text-white">Cognome</label>
                        <div class="mt-2.5">
                            <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-semibold leading-6 text-white">Email</label>
                        <div class="mt-2.5">
                            <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block text-sm font-semibold leading-6 text-white">Messaggio</label>
                        <div class="mt-2.5">
                            <textarea name="message" id="message" rows="4" class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6"></textarea>
                        </div>
                    </div>
                </div>
                <div class="mt-10">
                    <button type="submit" class="block w-full rounded-full bg-primary px-3.5 py-3 text-center text-sm font-semibold text-background shadow-sm hover:bg-opacity-90 cursor-pointer">Invia Messaggio</button>
                </div>
            </form>
        </div>
    </div>
@endsection
