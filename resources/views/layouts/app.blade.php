<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Gioielleria Mari')</title>
    <meta name="description" content="@yield('meta-description', 'Riparazione e vendita di orologi di prestigio.')">

    @include('partials.seo-tags')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
</head>
<body class="min-h-screen bg-white font-sans antialiased">
<div class="min-h-screen flex flex-col">

    <x-header />

    <main class="flex-1">
        @yield('content')
    </main>

    <x-footer />

</div>
<script>
    lucide.createIcons();
</script>
@stack('scripts')
</body>
</html>
