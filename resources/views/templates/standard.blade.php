@extends('layouts.app')
@section('title', $page->meta_title ?? $page->title)
@section('meta-description', $page->meta_description)

@section('content')
    <div class="bg-gray-900 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h1 class="text-4xl font-bold tracking-tight text-white">{{ $page->title }}</h1>
            <div class="mt-6 text-gray-300 prose prose-invert max-w-none">
                {!! $page->content !!}
            </div>
        </div>
    </div>
@endsection
