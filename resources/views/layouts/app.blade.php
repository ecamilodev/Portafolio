<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portafolio profesional de Eduard Camilo Sánchez García, ingeniero de sistemas y desarrollador backend y full stack.">
    <meta name="theme-color" content="#faf6f1">

    <title>@yield('title', 'Camilo Sánchez · Portafolio')</title>

    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'><rect width='32' height='32' rx='8' fill='%230f1014'/><text x='50%' y='55%' font-family='Space Grotesk' font-size='18' font-weight='700' fill='%238b5cf6' text-anchor='middle' dominant-baseline='middle'>CS</text></svg>">

    {{-- Preconnect a Google Fonts antes de cargar el CSS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap">

    {{-- Preload hero image (LCP) --}}
    <link rel="preload" as="image" href="{{ asset('img/perfil.webp') }}" type="image/webp">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col">

    <a href="#main-content"
       class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-[200]
              focus:rounded-lg focus:bg-linen-200 focus:border focus:border-clay-600/40
              focus:px-4 focus:py-2 focus:text-sm focus:text-linen-900 focus:shadow-md">
        Saltar al contenido principal
    </a>

    {{-- Efecto CRT de encendido (1 vez por sesión) --}}
    @include('partials.crt-intro')

    {{-- Scanlines permanentes sutiles --}}
    <div class="scanlines-overlay" aria-hidden="true"></div>

    @include('partials.navbar')

    <main id="main-content" class="flex-1 relative">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>
