@extends('layouts.app')

@section('header-classes', 'bg-transparent') {{-- Rende l'header trasparente --}}

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
        {{-- Qui c'è il codice completo della sezione servizi --}}
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold leading-7 text-gray-400">La Nostra Esperienza</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Artigiani del Tempo</p>
                <p class="mt-6 text-lg leading-8 text-gray-300">Dalla manutenzione ordinaria al restauro di pezzi storici, trattiamo ogni orologio con la massima cura e precisione.</p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                    <div class="flex flex-col">
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 text-gray-400"><path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.73-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.474-4.474c-.048-.58-.026-1.193-.14-1.743m-2.496 3.03c-.317.384-.73.626-1.208.766M3 11l4.655-5.653a2.548 2.548 0 1 1 3.586 3.586L6.837 14.52m5.108-.233-.246.247a.538.538 0 0 1-.758 0l-.588-.587a.538.538 0 0 1 0-.758l.247-.246m5.877 5.877-.588-.587a.538.538 0 0 1 0-.758l.588-.587a.538.538 0 0 1 .758 0l.588.587a.538.538 0 0 1 0 .758l-.588.587Z" /></svg>
                            Riparazioni Complesse
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-300"><p class="flex-auto">Interventi su meccanismi complicati, cronografi e calendari perpetui. Utilizziamo solo ricambi originali o di altissima qualità.</p></dd>
                    </div>
                    <div class="flex flex-col">
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 text-gray-400"><path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 11.667 0l3.181-3.183m-4.991-2.691v4.992h4.992m-4.992 0-3.181-3.183a8.25 8.25 0 0 0-11.667 0l-3.181 3.183" /></svg>
                            Restauro Orologi d'Epoca
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-300"><p class="flex-auto">Restituiamo splendore e funzionalità a orologi vintage e da tasca, rispettando la loro storia e la loro meccanica originale.</p></dd>
                    </div>
                    <div class="flex flex-col">
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 text-gray-400"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg>
                            Manutenzione e Revisione
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-300"><p class="flex-auto">Revisione periodica, pulizia del meccanismo, sostituzione guarnizioni e test di impermeabilità per garantire precisione e longevità.</p></dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
    <div class="bg-gray-900">
        {{-- Qui c'è il codice completo della sezione prodotti --}}
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="text-2xl font-bold tracking-tight text-white">Le Nostre Proposte</h2>
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                <div class="group relative">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-800 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="https://images.pexels.com/photos/9869273/pexels-photo-9869273.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Orologio cronografo da uomo con quadrante blu." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-white"><a href="#"><span aria-hidden="true" class="absolute inset-0"></span>Cronografo Blu Marino</a></h3>
                            <p class="mt-1 text-sm text-gray-400">Acciaio e Vetro Zaffiro</p>
                        </div>
                        <p class="text-sm font-medium text-white">€2.100</p>
                    </div>
                </div>
                <div class="group relative">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-800 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="https://images.pexels.com/photos/2735970/pexels-photo-2735970.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Collana punto luce in oro bianco." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-white"><a href="#"><span aria-hidden="true" class="absolute inset-0"></span>Punto Luce</a></h3>
                            <p class="mt-1 text-sm text-gray-400">Oro Bianco 18k</p>
                        </div>
                        <p class="text-sm font-medium text-white">€1.250</p>
                    </div>
                </div>
                <div class="group relative">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-800 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="https://images.pexels.com/photos/265906/pexels-photo-265906.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Bracciale da donna con piccoli diamanti." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-white"><a href="#"><span aria-hidden="true" class="absolute inset-0"></span>Bracciale Tennis</a></h3>
                            <p class="mt-1 text-sm text-gray-400">Argento e Zirconi</p>
                        </div>
                        <p class="text-sm font-medium text-white">€890</p>
                    </div>
                </div>
                <div class="group relative">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-800 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="https://images.pexels.com/photos/277319/pexels-photo-277319.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Orologio da tasca vintage con catena." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-white"><a href="#"><span aria-hidden="true" class="absolute inset-0"></span>Orologio da Tasca</a></h3>
                            <p class="mt-1 text-sm text-gray-400">Meccanico, 1920</p>
                        </div>
                        <p class="text-sm font-medium text-white">€1.500</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
