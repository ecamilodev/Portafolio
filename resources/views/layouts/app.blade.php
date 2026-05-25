<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portafolio profesional de Eduard Camilo Sánchez García — Ingeniero de Sistemas, desarrollador backend y full stack.">
    <meta name="theme-color" content="#0a0a0f">

    <title>@yield('title', 'Camilo Sánchez · Portafolio')</title>

    {{-- Favicon (reemplázalo por tu logo) --}}
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'><rect width='32' height='32' rx='8' fill='%230f1014'/><text x='50%' y='55%' font-family='Space Grotesk' font-size='18' font-weight='700' fill='%238b5cf6' text-anchor='middle' dominant-baseline='middle'>CS</text></svg>">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col">

    @include('partials.navbar')

    <main class="flex-1 relative overflow-hidden">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>
