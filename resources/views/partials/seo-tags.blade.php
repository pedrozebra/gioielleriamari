<meta name="description" content="@yield('meta-description', 'Riparazione, restauro e vendita di orologi di prestigio. La passione che segna ogni istante.')">

<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="@yield('og-title', $__env->yieldContent('title', 'Gioielleria Mari'))">
<meta property="og:description" content="@yield('og-description', $__env->yieldContent('meta-description', 'Riparazione, restauro e vendita di orologi di prestigio.'))">
<meta property="og:image" content="@yield('og-image', asset('images/default-social-image.jpg'))">

<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta property="twitter:title" content="@yield('twitter-title', $__env->yieldContent('title', 'Gioielleria Mari'))">
<meta property="twitter:description" content="@yield('twitter-description', $__env->yieldContent('meta-description', 'Riparazione, restauro e vendita di orologi di prestigio.'))">
<meta property="twitter:image" content="@yield('twitter-image', asset('images/default-social-image.jpg'))">

{{-- Nota: dovrai creare un'immagine generica del sito e salvarla in public/images/default-social-image.jpg --}}
