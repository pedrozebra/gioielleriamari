@extends('layouts.app')

@section('title', 'Stato Riparazione')
@section('description', 'Traccia lo stato della tua riparazione in tempo reale. Inserisci il codice per seguire ogni fase del processo.')

@section('content')
    <main>
        <section class="bg-gray-50 py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto text-center">
                    <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Cerca la tua riparazione</h1>
                    <p class="text-xl text-gray-600 leading-relaxed">
                        Inserisci il codice che hai ricevuto in negozio per seguire in tempo reale lo stato del tuo ordine.
                    </p>
                </div>
            </div>
        </section>

        <section class="py-20 bg-white">
            <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-gray-50 rounded-2xl p-8">
                    <form method="GET" action="{{ route('stato-riparazione') }}">
                        <div class="mb-4">
                            <label for="code" class="block text-sm font-medium text-gray-700 mb-2">
                                Codice di Tracking
                            </label>
                            <input
                                type="text"
                                id="code"
                                name="code"
                                value="{{ $searchedCode }}"
                                placeholder="es. ABC-123"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-gray-500 focus:border-gray-500 text-center text-lg font-mono uppercase"
                                required
                                oninput="this.value = this.value.toUpperCase()"
                            />
                        </div>
                        <button type="submit" class="w-full hover:cursor-pointer bg-gray-900 text-white py-3 px-6 rounded-lg font-semibold text-lg hover:bg-gray-700 transition-colors">
                            Cerca Riparazione
                        </button>
                    </form>
                </div>
            </div>
        </section>

        @if ($searchedCode)
            <section class="pb-20 bg-white -mt-10">
                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                    @if ($repair)
                        @php
                            $statusColor = match($repair->status) {
                                'Pronto per il ritiro' => 'success',
                                'In lavorazione' => 'warning',
                                'In attesa di pezzi' => 'info',
                                'Consegnato' => 'secondary',
                                default => 'primary',
                            };
                            $statusColorClasses = match($statusColor) {
                                'success' => 'bg-green-100 text-green-800',
                                'warning' => 'bg-yellow-100 text-yellow-800',
                                'info' => 'bg-blue-100 text-blue-800',
                                default => 'bg-gray-100 text-gray-800',
                            };
                        @endphp
                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200">
                            <div class="p-6 border-b border-gray-200">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                                    <div>
                                        <p class="text-sm text-gray-500">Riparazione #{{ $repair->customer_code }}</p>
                                        <h3 class="text-xl font-semibold text-gray-900">{{ $repair->product_details }}</h3>
                                    </div>
                                    <div class="text-left sm:text-right mt-4 sm:mt-0">
                                        <div class="text-sm text-gray-500">Data consegna</div>
                                        <div class="text-lg font-semibold text-gray-700">{{ \Carbon\Carbon::parse($repair->delivery_date)->format('d/m/Y') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 bg-gray-50">
                                <div class="flex items-center justify-between">
                                    <h4 class="text-lg font-semibold text-gray-900">Stato Attuale</h4>
                                    <span class="px-3 py-1 rounded-full text-sm font-medium {{ $statusColorClasses }}">
                                    {{ $repair->status }}
                                </span>
                                </div>
                                <p class="mt-2 text-gray-600">
                                    Data presunta di completamento: <strong>{{ \Carbon\Carbon::parse($repair->estimated_completion_date)->format('d/m/Y') }}</strong>
                                </p>
                            </div>
                        </div>
                    @else
                        <div class="bg-red-50 border border-red-200 rounded-lg p-6 text-center">
                            <h3 class="text-lg font-semibold text-red-900 mb-2">Codice non trovato</h3>
                            <p class="text-red-700">Verifica di aver inserito il codice corretto o contattaci.</p>
                        </div>
                    @endif
                </div>
            </section>
        @endif
    </main>
@endsection
