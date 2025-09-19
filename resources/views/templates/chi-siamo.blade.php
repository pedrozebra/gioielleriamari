@extends('layouts.app')

@section('title', $page->meta_title ?? $page->title)
@section('meta-description', $page->meta_description)

@section('content')
    <div class="relative py-16 bg-white overflow-hidden">
        <div class="relative px-4 sm:px-6 lg:px-8">
            <div class="max-w-prose mx-auto text-center">
                <h1 class="text-4xl cormorant-title tracking-tight text-gray-900 sm:text-5xl">
                    {{ $page->extra_content['hero_title'] ?? $page->title }}
                </h1>
                <p class="mt-4 font-inter text-gray-500">
                    {!! $page->extra_content['hero_subtitle'] ?? '' !!}
                </p>
            </div>
            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                    <div>
                        @if($page->featured_image)
                            <img
                                src="{{ asset('storage/' . $page->featured_image) }}"
                                alt="{{ $page->meta_title ?? $page->title }}"
                                class="rounded-lg"
                                loading="lazy"
                            />
                        @endif
                    </div>
                    <div>
                        <h2 class="text-3xl cormorant-title text-gray-900 mb-6">
                            {{ $page->extra_content['section_title'] ?? '' }}
                        </h2>
                        <div class="prose prose-lg text-gray-500 font-inter">
                            <p>
                                {!! $page->extra_content['section_content_block_one'] ?? '' !!}
                            </p>
                            <p class="mt-4">
                                {!! $page->extra_content['section_content_block_two'] ?? '' !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <section class="mt-24 bg-gray-50 py-16 rounded-lg">
                <div class="max-w-7xl mx-auto">
                    <h2 class="text-3xl cormorant-title text-center text-gray-900 mb-12">
                        I Nostri Valori
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="inline-block p-4 bg-white rounded-full shadow-sm">
                                <i data-lucide="gem" class="h-8 w-8 text-purple-600"></i>
                            </div>
                            <h3 class="mt-4 text-xl cormorant-title text-gray-900">Eccellenza</h3>
                            <p class="mt-2 font-inter text-gray-500">Ricerca costante della perfezione in ogni dettaglio.</p>
                        </div>
                        <div class="text-center">
                            <div class="inline-block p-4 bg-white rounded-full shadow-sm">
                                <i data-lucide="heart" class="h-8 w-8 text-purple-600"></i>
                            </div>
                            <h3 class="mt-4 text-xl cormorant-title text-gray-900">Passione</h3>
                            <p class="mt-2 font-inter text-gray-500">Amore per l'arte dell'orologeria e della gioielleria.</p>
                        </div>
                        <div class="text-center">
                            <div class="inline-block p-4 bg-white rounded-full shadow-sm">
                                <i data-lucide="shield" class="h-8 w-8 text-purple-600"></i>
                            </div>
                            <h3 class="mt-4 text-xl cormorant-title text-gray-900">Affidabilità</h3>
                            <p class="mt-2 font-inter text-gray-500">Garanzia di qualità e servizio impeccabile.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
