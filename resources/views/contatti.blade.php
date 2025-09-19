@extends('layouts.app')

@section('title', 'Contatti - Gioielleria Mari')
@section('description', 'Contatta Gioielleria Mari per preventivi, informazioni o assistenza. Siamo a tua completa disposizione.')

@section('content')
    <main>
        <section class="bg-gray-50 py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto text-center">
                    <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Contattaci</h1>
                    <p class="text-xl text-gray-600 leading-relaxed">
                        Siamo qui per aiutarti. Per qualsiasi richiesta, preventivo o informazione, non esitare a scriverci.
                    </p>
                </div>
            </div>
        </section>

        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">

                    <div class="lg:col-span-2">
                        <h2 class="text-3xl font-bold text-gray-900 mb-8">Invia un Messaggio</h2>

                        @if (session('success'))
                            <div class="mb-6 rounded-md bg-green-50 p-4 text-sm text-green-700 border border-green-200">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contatti.store') }}" method="POST" class="space-y-6">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">Nome *</label>
                                    <input type="text" id="first_name" name="first_name" required value="{{ old('first_name') }}"
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-gray-500 transition-colors">
                                    @error('first_name') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                                </div>
                                <div>
                                    <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Cognome *</label>
                                    <input type="text" id="last_name" name="last_name" required value="{{ old('last_name') }}"
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-gray-500 transition-colors">
                                    @error('last_name') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                                </div>
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                                <input type="email" id="email" name="email" required value="{{ old('email') }}"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-gray-500 transition-colors">
                                @error('email') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Messaggio *</label>
                                <textarea id="message" name="message" rows="5" required
                                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-gray-500 transition-colors">{{ old('message') }}</textarea>
                                @error('message') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                            </div>

                            <button type="submit" class="w-full hover:cursor-pointer bg-gray-900 text-white py-3 px-6 rounded-lg font-semibold text-lg hover:bg-gray-700 transition-colors">
                                Invia Messaggio
                            </button>
                        </form>
                    </div>

                    <div class="space-y-8">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">I Nostri Recapiti</h3>
                            <div class="flex items-start">
                                <div class="bg-purple-100 w-12 h-12 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <i data-lucide="map-pin" class="h-6 w-6 text-purple-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Indirizzo</h4>
                                    <p class="text-gray-600">
                                        Via Roma 123<br>
                                        84091 Battipaglia (SA)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="bg-purple-100 w-12 h-12 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <i data-lucide="phone" class="h-6 w-6 text-purple-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Telefono</h4>
                                    <p class="text-gray-600"><a href="tel:+390828123456" class="hover:text-purple-600">+39 0828 123456</a></p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-purple-100 w-12 h-12 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <i data-lucide="mail" class="h-6 w-6 text-purple-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Email</h4>
                                    <p class="text-gray-600"><a href="mailto:info@gioielleriamari.it" class="hover:text-purple-600">info@gioielleriamari.it</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
