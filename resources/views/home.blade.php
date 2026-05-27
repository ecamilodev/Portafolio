@extends('layouts.app')

@section('title', $profile['short_name'] . ' · Portafolio')

@section('content')

{{-- ═══════════════════════════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════════════════════════ --}}
<section class="relative pt-40 pb-24 md:pt-56 md:pb-36 overflow-hidden">
    {{-- Fondo decorativo --}}
    <div class="absolute inset-0 grid-pattern"></div>
    <div class="glow-blob bg-violet-600 h-80 w-80 -top-20 -left-10"></div>
    <div class="glow-blob bg-azure-600 h-96 w-96 top-40 -right-20"></div>

    <div class="container-app relative z-10">
        <div class="grid md:grid-cols-[1fr_auto] gap-16 items-center">

            {{-- Columna izquierda: texto --}}
            <div>
                {{-- Eyebrow --}}
                <p class="section-eyebrow mb-5">Hola, soy</p>

                {{-- Nombre dominante --}}
                <h1 class="font-display font-bold leading-[0.95] tracking-tight mb-7
                            text-6xl sm:text-7xl md:text-8xl lg:text-[7rem]">
                    <span class="text-white block">Camilo</span>
                    <span class="text-gradient block">Sánchez</span>
                </h1>

                {{-- Rol --}}
                <p class="text-lg md:text-xl text-fog-300 font-medium mb-8">
                    {{ $profile['role'] }}
                </p>

                {{-- Contacto rápido --}}
                <div class="flex flex-wrap items-center gap-x-6 gap-y-2 mb-10 text-sm font-mono text-fog-400">
                    <a href="mailto:{{ $profile['email'] }}"
                       class="flex items-center gap-2 hover:text-azure-400 transition-colors duration-200">
                        <svg class="h-3.5 w-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        {{ $profile['email'] }}
                    </a>
                    <span class="flex items-center gap-2">
                        <svg class="h-3.5 w-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Colombia · Remoto
                    </span>
                </div>

                {{-- Botones sociales + CTA --}}
                <div class="flex flex-wrap items-center gap-3">
                    <a href="{{ $profile['github'] }}" target="_blank" rel="noopener noreferrer"
                       class="social-btn" aria-label="GitHub">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 .5A11.5 11.5 0 000 12a11.5 11.5 0 007.86 10.94c.58.11.79-.25.79-.56v-2c-3.2.7-3.88-1.36-3.88-1.36-.52-1.32-1.27-1.67-1.27-1.67-1.04-.71.08-.7.08-.7 1.15.08 1.76 1.18 1.76 1.18 1.02 1.75 2.68 1.24 3.34.95.1-.74.4-1.24.72-1.53-2.55-.29-5.24-1.28-5.24-5.7 0-1.26.45-2.29 1.18-3.1-.12-.29-.51-1.47.11-3.05 0 0 .97-.31 3.18 1.18a11 11 0 015.78 0c2.21-1.49 3.17-1.18 3.17-1.18.63 1.58.24 2.76.12 3.05.74.81 1.18 1.84 1.18 3.1 0 4.43-2.7 5.4-5.27 5.69.41.36.78 1.06.78 2.14v3.17c0 .31.21.68.8.56A11.5 11.5 0 0024 12 11.5 11.5 0 0012 .5z"/>
                        </svg>
                    </a>
                    <a href="{{ $profile['linkedin'] }}" target="_blank" rel="noopener noreferrer"
                       class="social-btn social-btn--accent" aria-label="LinkedIn">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0H5a5 5 0 00-5 5v14a5 5 0 005 5h14a5 5 0 005-5V5a5 5 0 00-5-5zM8 19H5V8h3v11zM6.5 6.7a1.75 1.75 0 110-3.5 1.75 1.75 0 010 3.5zM20 19h-3v-5.6c0-1.34-.5-2.2-1.7-2.2-.92 0-1.47.62-1.7 1.22-.08.22-.1.52-.1.83V19h-3V8h3v1.27c.4-.62 1.1-1.5 2.7-1.5 1.97 0 3.45 1.28 3.45 4.05V19z"/>
                        </svg>
                    </a>
                    <a href="mailto:{{ $profile['email'] }}" class="social-btn" aria-label="Email">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </a>
                    <div class="hidden sm:block w-px h-8 bg-white/10 mx-1"></div>
                    <a href="#proyectos" class="btn-primary">
                        Ver proyectos
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Columna derecha: foto --}}
            <div class="flex justify-center items-center order-first md:order-last mb-6 md:mb-0">
                <div class="relative">
                    {{-- Sunburst decorativo --}}
                    <svg class="absolute pointer-events-none animate-spin"
                         style="inset:-2rem;width:calc(100%+4rem);height:calc(100%+4rem);opacity:0.18;animation-duration:40s"
                         viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="100" y1="5"   x2="100" y2="195" stroke="url(#sr)" stroke-width="0.6"/>
                        <line x1="5"   y1="100" x2="195" y2="100" stroke="url(#sr)" stroke-width="0.6"/>
                        <line x1="29"  y1="29"  x2="171" y2="171" stroke="url(#sr)" stroke-width="0.6"/>
                        <line x1="171" y1="29"  x2="29"  y2="171" stroke="url(#sr)" stroke-width="0.6"/>
                        <line x1="14"  y1="63"  x2="186" y2="137" stroke="url(#sr)" stroke-width="0.6"/>
                        <line x1="63"  y1="14"  x2="137" y2="186" stroke="url(#sr)" stroke-width="0.6"/>
                        <line x1="186" y1="63"  x2="14"  y2="137" stroke="url(#sr)" stroke-width="0.6"/>
                        <line x1="137" y1="14"  x2="63"  y2="186" stroke="url(#sr)" stroke-width="0.6"/>
                        <defs>
                            <linearGradient id="sr" x1="0" y1="0" x2="1" y2="1">
                                <stop offset="0%"   stop-color="#60a5fa" stop-opacity="0"/>
                                <stop offset="50%"  stop-color="#a78bfa"/>
                                <stop offset="100%" stop-color="#60a5fa" stop-opacity="0"/>
                            </linearGradient>
                        </defs>
                    </svg>

                    {{-- Glow --}}
                    <div class="absolute -inset-4 rounded-full bg-gradient-to-br from-violet-500/25 to-azure-500/25 blur-2xl pointer-events-none"></div>
                    {{-- Borde gradiente --}}
                    <div class="absolute -inset-[3px] rounded-full bg-gradient-to-br from-violet-500/50 via-transparent to-azure-500/50 pointer-events-none"></div>

                    <picture>
                        <source srcset="{{ asset('img/perfil.webp') }}" type="image/webp">
                        <img src="{{ asset('img/perfil-opt.png') }}"
                             alt="Camilo Sánchez"
                             fetchpriority="high"
                             loading="eager"
                             decoding="sync"
                             class="relative w-52 md:w-60 lg:w-72 aspect-square object-cover object-top rounded-full border border-white/10 shadow-2xl">
                    </picture>

                    {{-- Letra "C" decorativa --}}
                    <div class="absolute -bottom-2 -right-2 h-12 w-12 rounded-full
                                bg-gradient-to-br from-azure-500 to-violet-600
                                flex items-center justify-center
                                font-display font-bold text-white text-xl
                                shadow-lg shadow-violet-500/40 border-2 border-ink-950">
                        C
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="hr-gradient"></div>

{{-- ═══════════════════════════════════════════════════════════════════
     SOBRE MÍ
═══════════════════════════════════════════════════════════════════ --}}
<section id="sobre-mi" class="py-32 relative">
    <div class="container-app">

        {{-- Título centrado --}}
        <div class="text-center mb-16" data-reveal>
            <span class="section-decorator"></span>
            <p class="section-eyebrow mb-4">01 · Sobre mí</p>
            <h2 class="section-title">¿Quién soy?</h2>
        </div>

        {{-- Grid: tabla de datos + foto --}}
        <div class="grid md:grid-cols-[1fr_auto] gap-10 items-start mb-12">

            {{-- Tabla de datos --}}
            <div class="space-y-3" data-reveal data-delay="80">
                <div class="data-row">
                    <span class="data-label">Rol</span>
                    <span class="data-value">Backend & Full Stack Developer</span>
                </div>
                <div class="data-row">
                    <span class="data-label">Especialidad</span>
                    <span class="data-value">Laravel · Flutter · APIs REST</span>
                </div>
                <div class="data-row">
                    <span class="data-label">Empresa actual</span>
                    <span class="data-value font-semibold text-violet-400">Steps Consulting Corp</span>
                </div>
                <div class="data-row">
                    <span class="data-label">Ubicación</span>
                    <span class="data-value">Colombia — remoto</span>
                </div>
                <div class="data-row">
                    <span class="data-label">Email</span>
                    <a href="mailto:{{ $profile['email'] }}"
                       class="data-value text-azure-400 hover:text-azure-300 transition-colors duration-200">
                        {{ $profile['email'] }}
                    </a>
                </div>
                <div class="data-row">
                    <span class="data-label">Disponibilidad</span>
                    <span class="data-value flex items-center gap-2">
                        <span class="relative flex h-2 w-2 flex-shrink-0">
                            <span class="absolute inline-flex h-full w-full rounded-full bg-azure-400 opacity-75 animate-ping"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-azure-400"></span>
                        </span>
                        Abierto a nuevos proyectos
                    </span>
                </div>
            </div>

            {{-- Foto --}}
            <div class="flex justify-center" data-reveal data-delay="160">
                <div class="relative">
                    <div class="absolute -inset-2 rounded-2xl bg-gradient-to-br from-violet-500/20 to-azure-500/20 blur-xl pointer-events-none"></div>
                    <div class="absolute -inset-px rounded-2xl bg-gradient-to-br from-violet-500/30 via-transparent to-azure-500/30 pointer-events-none"></div>
                    <picture>
                        <source srcset="{{ asset('img/perfil.webp') }}" type="image/webp">
                        <img src="{{ asset('img/perfil-opt.png') }}"
                             alt="Camilo Sánchez"
                             loading="lazy"
                             decoding="async"
                             class="relative w-40 sm:w-44 md:w-52 aspect-[3/4] object-cover object-top rounded-2xl border border-white/10 shadow-xl">
                    </picture>
                </div>
            </div>
        </div>

        {{-- Stat cards --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4" data-reveal data-delay="240">
            <div class="stat-card">
                <div class="font-display text-4xl font-bold text-white mb-2">4+</div>
                <div class="text-xs font-mono uppercase tracking-[0.2em] text-fog-400">Años en tech</div>
            </div>
            <div class="stat-card">
                <div class="font-display text-4xl font-bold text-white mb-2">5+</div>
                <div class="text-xs font-mono uppercase tracking-[0.2em] text-fog-400">Proyectos clave</div>
            </div>
            <div class="stat-card">
                <div class="font-display text-4xl font-bold text-white mb-2">2</div>
                <div class="text-xs font-mono uppercase tracking-[0.2em] text-fog-400">Países (CO · PR)</div>
            </div>
            <div class="stat-card">
                <div class="font-display text-4xl font-bold text-white mb-2">100%</div>
                <div class="text-xs font-mono uppercase tracking-[0.2em] text-fog-400">Compromiso</div>
            </div>
        </div>

    </div>
</section>

<div class="hr-gradient"></div>

{{-- ═══════════════════════════════════════════════════════════════════
     EXPERIENCIA
═══════════════════════════════════════════════════════════════════ --}}
<section id="experiencia" class="py-32 relative">
    <div class="container-app">
        <div class="mb-20 max-w-2xl" data-reveal>
            <p class="section-eyebrow mb-5">02 · Trayectoria</p>
            <h2 class="section-title mb-6">Experiencia<br>profesional</h2>
            <p class="text-fog-400 leading-relaxed">
                Una línea de tiempo con los lugares donde he sumado, aprendido y construido.
            </p>
        </div>

        <div class="relative">
            {{-- Línea vertical del timeline --}}
            <div class="absolute left-3 md:left-1/2 top-0 bottom-0 w-px bg-gradient-to-b from-azure-500/40 via-violet-500/40 to-transparent"></div>

            <div class="space-y-12">
                @foreach($experience as $i => $exp)
                    <div class="relative grid md:grid-cols-2 gap-8 items-start" data-reveal>
                        {{-- Punto del timeline --}}
                        <div class="absolute left-3 md:left-1/2 -translate-x-1/2 top-2 h-3 w-3 rounded-full bg-gradient-to-br from-azure-400 to-violet-500 ring-4 ring-ink-950 z-10"></div>

                        {{-- Tarjeta (alternada en desktop) --}}
                        <div class="ml-10 md:ml-0 {{ $i % 2 === 0 ? 'md:pr-12 md:text-right' : 'md:col-start-2 md:pl-12' }}">
                            <div class="card inline-block w-full text-left">
                                <p class="font-mono text-xs text-azure-400 mb-2">{{ $exp['period'] }}</p>
                                <h3 class="font-display text-xl text-white mb-1">{{ $exp['role'] }}</h3>
                                <p class="text-sm text-fog-300 mb-1">{{ $exp['company'] }}</p>
                                <p class="text-xs text-fog-500 mb-4 font-mono">{{ $exp['location'] }}</p>
                                <ul class="space-y-2 text-sm text-fog-300">
                                    @foreach($exp['highlights'] as $h)
                                        <li class="flex gap-2">
                                            <span class="text-violet-400 mt-1">▸</span>
                                            <span>{{ $h }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<div class="hr-gradient"></div>

{{-- ═══════════════════════════════════════════════════════════════════
     ESTUDIOS
═══════════════════════════════════════════════════════════════════ --}}
<section id="estudios" class="py-32 relative">
    <div class="container-app">
        <div class="mb-16 max-w-2xl" data-reveal>
            <p class="section-eyebrow mb-5">03 · Formación</p>
            <h2 class="section-title">Estudios</h2>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
            @foreach($education as $edu)
                <div class="card" data-reveal>
                    <p class="font-mono text-xs text-violet-400 mb-2">{{ $edu['period'] }}</p>
                    <h3 class="font-display text-xl text-white mb-1">{{ $edu['title'] }}</h3>
                    <p class="text-sm text-fog-300 mb-3">{{ $edu['institution'] }}</p>
                    <p class="text-sm text-fog-400 leading-relaxed">{{ $edu['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<div class="hr-gradient"></div>

{{-- ═══════════════════════════════════════════════════════════════════
     PROYECTOS
═══════════════════════════════════════════════════════════════════ --}}
<section id="proyectos" class="py-32 relative">
    <div class="container-app">
        <div class="mb-20 max-w-2xl" data-reveal>
            <p class="section-eyebrow mb-5">04 · Selección</p>
            <h2 class="section-title mb-6">Proyectos<br>destacados</h2>
            <p class="text-fog-400 leading-relaxed">
                Una muestra de las plataformas, apps y sitios donde he participado o liderado el desarrollo.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($projects as $project)
                <a href="{{ $project['url'] }}"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="block group focus:outline-none focus-visible:ring-2 focus-visible:ring-violet-500 rounded-2xl"
                   data-reveal data-delay="{{ $loop->index * 80 }}">
                    <article class="card cursor-pointer relative overflow-hidden h-full transition-transform duration-300 group-hover:-translate-y-1">
                        {{-- Glow del acento --}}
                        <div class="absolute -top-20 -right-20 h-40 w-40 rounded-full
                                    {{ $project['accent'] === 'azure' ? 'bg-azure-500/20' : 'bg-violet-500/20' }}
                                    blur-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                        <div class="relative flex items-start justify-between mb-4">
                            <h3 class="font-display text-2xl text-white group-hover:text-gradient transition">
                                {{ $project['name'] }}
                            </h3>
                            <span class="{{ $project['accent'] === 'azure' ? 'badge-azure' : 'badge-violet' }}">
                                {{ $project['year'] }}
                            </span>
                        </div>

                        <p class="text-sm font-medium text-fog-300 mb-3 relative">{{ $project['tagline'] }}</p>
                        <p class="text-sm text-fog-400 mb-5 leading-relaxed relative">{{ $project['description'] }}</p>

                        <div class="flex flex-wrap gap-1.5 mb-5 relative">
                            @foreach($project['stack'] as $tech)
                                <span class="chip">{{ $tech }}</span>
                            @endforeach
                        </div>

                        <div class="flex items-center justify-between pt-4 border-t border-white/5 relative">
                            <span class="text-xs font-mono text-fog-500">{{ $project['role'] }}</span>
                            <span class="text-xs text-fog-400 group-hover:text-white transition flex items-center gap-1">
                                Ver más
                                <svg class="h-3 w-3 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </span>
                        </div>
                    </article>
                </a>
            @endforeach
        </div>
    </div>
</section>

<div class="hr-gradient"></div>

{{-- ═══════════════════════════════════════════════════════════════════
     SKILLS
═══════════════════════════════════════════════════════════════════ --}}
<section id="skills" class="py-32 relative">
    <div class="container-app">
        <div class="mb-20 max-w-2xl" data-reveal>
            <p class="section-eyebrow mb-5">05 · Stack</p>
            <h2 class="section-title mb-6">Habilidades &<br>herramientas</h2>
            <p class="text-fog-400 leading-relaxed">
                Las tecnologías con las que trabajo en el día a día.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($skills as $category => $items)
                <div class="card" data-reveal>
                    <h3 class="font-display text-lg text-white mb-4 flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-gradient-to-r from-azure-400 to-violet-500"></span>
                        {{ $category }}
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach($items as $item)
                            <span class="chip">{{ $item }}</span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<div class="hr-gradient"></div>

{{-- ═══════════════════════════════════════════════════════════════════
     CERTIFICACIONES
═══════════════════════════════════════════════════════════════════ --}}
<section id="certificaciones" class="py-32 relative">
    <div class="container-app">
        <div class="mb-16 max-w-2xl" data-reveal>
            <p class="section-eyebrow mb-5">06 · Aprendizaje continuo</p>
            <h2 class="section-title">Certificaciones</h2>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($certifications as $cert)
                <div class="card !p-0 flex flex-col overflow-hidden" data-reveal>
                    {{-- Vista previa --}}
                    <div class="w-full overflow-hidden border-b border-white/10 bg-white/5">
                        <picture>
                            <source srcset="{{ asset(str_replace('.png', '.webp', $cert['img'])) }}" type="image/webp">
                            <img src="{{ asset(str_replace('.png', '-opt.png', $cert['img'])) }}"
                                 alt="{{ $cert['name'] }}"
                                 loading="lazy"
                                 decoding="async"
                                 class="w-full h-full object-contain">
                        </picture>
                    </div>

                    {{-- Info --}}
                    <div class="p-5 flex flex-col flex-1">
                        <h3 class="font-display text-sm text-white mb-1 leading-snug">{{ $cert['name'] }}</h3>
                        <p class="text-xs text-fog-400 mb-3">{{ $cert['issuer'] }}</p>
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-xs font-mono text-azure-400">{{ $cert['year'] }}</span>
                            <span class="text-fog-600">·</span>
                            <span class="text-xs font-mono text-fog-400">{{ $cert['hours'] }}</span>
                        </div>

                        <div class="mt-auto pt-4 border-t border-white/5">
                            <a href="{{ asset($cert['pdf']) }}" target="_blank"
                               class="flex items-center gap-2 text-sm text-fog-300 hover:text-white transition group">
                                <svg class="h-4 w-4 text-azure-400 group-hover:text-azure-300 transition flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                </svg>
                                Ver certificado
                                <svg class="h-3 w-3 ml-auto group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<div class="hr-gradient"></div>

{{-- ═══════════════════════════════════════════════════════════════════
     HERRAMIENTAS DE IA
═══════════════════════════════════════════════════════════════════ --}}
<section id="ia" class="py-32 relative">
    <div class="container-app">
        <div class="mb-20 max-w-2xl" data-reveal>
            <p class="section-eyebrow mb-5">07 · Stack técnico</p>
            <h2 class="section-title mb-6">Herramientas &<br>tecnologías</h2>
            <p class="text-fog-400 leading-relaxed">
                Las tecnologías y plataformas con las que implemento cada proyecto de principio a fin.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @foreach($aiTools as $tool)
                <div class="card relative overflow-hidden" data-reveal>
                    <div class="absolute -top-10 -right-10 h-32 w-32 rounded-full bg-violet-500/10 blur-2xl"></div>
                    <div class="relative">
                        <div class="font-mono text-xs text-azure-400 mb-2">// stack</div>
                        <h3 class="font-display text-xl text-white mb-3">{{ $tool['name'] }}</h3>
                        <p class="text-sm text-fog-400 leading-relaxed">{{ $tool['use'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<div class="hr-gradient"></div>

{{-- ═══════════════════════════════════════════════════════════════════
     CONTACTO
═══════════════════════════════════════════════════════════════════ --}}
<section id="contacto" class="py-32 relative">
    <div class="container-app">
        <div class="card relative overflow-hidden !p-10 md:!p-14" data-reveal>
            <div class="absolute -top-20 -right-20 h-60 w-60 rounded-full bg-violet-500/20 blur-3xl"></div>
            <div class="absolute -bottom-20 -left-20 h-60 w-60 rounded-full bg-azure-500/20 blur-3xl"></div>

            <div class="relative grid md:grid-cols-2 gap-10">
                <div>
                    <p class="section-eyebrow mb-5">08 · Conversemos</p>
                    <h2 class="section-title mb-6">¿Tienes un<br>proyecto en mente?</h2>
                    <p class="text-fog-400 mb-8 leading-relaxed">
                        Estoy abierto a colaboraciones, oportunidades freelance o conversaciones
                        sobre tecnología. Escríbeme y te respondo en menos de 24 horas.
                    </p>

                    <div class="space-y-3">
                        <a href="mailto:{{ $profile['email'] }}"
                           class="flex items-center gap-3 text-fog-300 hover:text-white transition-colors duration-200 group">
                            <span class="h-10 w-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center group-hover:bg-azure-500/10 group-hover:border-azure-500/30 transition-colors duration-200">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </span>
                            <span class="text-sm">{{ $profile['email'] }}</span>
                        </a>
                        <a href="{{ $profile['github'] }}" target="_blank" rel="noopener noreferrer"
                           class="flex items-center gap-3 text-fog-300 hover:text-white transition-colors duration-200 group">
                            <span class="h-10 w-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center group-hover:bg-violet-500/10 group-hover:border-violet-500/30 transition-colors duration-200">
                                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 .5A11.5 11.5 0 000 12a11.5 11.5 0 007.86 10.94c.58.11.79-.25.79-.56v-2c-3.2.7-3.88-1.36-3.88-1.36-.52-1.32-1.27-1.67-1.27-1.67-1.04-.71.08-.7.08-.7 1.15.08 1.76 1.18 1.76 1.18 1.02 1.75 2.68 1.24 3.34.95.1-.74.4-1.24.72-1.53-2.55-.29-5.24-1.28-5.24-5.7 0-1.26.45-2.29 1.18-3.1-.12-.29-.51-1.47.11-3.05 0 0 .97-.31 3.18 1.18a11 11 0 015.78 0c2.21-1.49 3.17-1.18 3.17-1.18.63 1.58.24 2.76.12 3.05.74.81 1.18 1.84 1.18 3.1 0 4.43-2.7 5.4-5.27 5.69.41.36.78 1.06.78 2.14v3.17c0 .31.21.68.8.56A11.5 11.5 0 0024 12 11.5 11.5 0 0012 .5z"/>
                                </svg>
                            </span>
                            <span class="text-sm">github.com/ecamilodev</span>
                        </a>
                        <a href="{{ $profile['linkedin'] }}" target="_blank" rel="noopener noreferrer"
                           class="flex items-center gap-3 text-fog-300 hover:text-white transition-colors duration-200 group">
                            <span class="h-10 w-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center group-hover:bg-azure-500/10 group-hover:border-azure-500/30 transition-colors duration-200">
                                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 0H5a5 5 0 00-5 5v14a5 5 0 005 5h14a5 5 0 005-5V5a5 5 0 00-5-5zM8 19H5V8h3v11zM6.5 6.7a1.75 1.75 0 110-3.5 1.75 1.75 0 010 3.5zM20 19h-3v-5.6c0-1.34-.5-2.2-1.7-2.2-.92 0-1.47.62-1.7 1.22-.08.22-.1.52-.1.83V19h-3V8h3v1.27c.4-.62 1.1-1.5 2.7-1.5 1.97 0 3.45 1.28 3.45 4.05V19z"/>
                                </svg>
                            </span>
                            <span class="text-sm">LinkedIn · Eduard Camilo</span>
                        </a>
                    </div>
                </div>

                {{-- Formulario --}}
                <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
                    @csrf

                    @if(session('success'))
                        <div class="rounded-lg border border-azure-500/30 bg-azure-500/10 p-3 text-sm text-azure-400">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div>
                        <label class="block text-xs font-mono uppercase tracking-wider text-fog-400 mb-2">Nombre</label>
                        <input type="text" name="name" required
                               class="w-full rounded-lg border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white placeholder-fog-500 focus:border-violet-500/50 focus:ring-1 focus:ring-violet-500/30 outline-none transition"
                               placeholder="Tu nombre">
                        @error('name') <p class="text-xs text-red-400 mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-mono uppercase tracking-wider text-fog-400 mb-2">Email</label>
                        <input type="email" name="email" required
                               class="w-full rounded-lg border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white placeholder-fog-500 focus:border-violet-500/50 focus:ring-1 focus:ring-violet-500/30 outline-none transition"
                               placeholder="tu@email.com">
                        @error('email') <p class="text-xs text-red-400 mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-mono uppercase tracking-wider text-fog-400 mb-2">Mensaje</label>
                        <textarea name="message" rows="4" required
                                  class="w-full rounded-lg border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white placeholder-fog-500 focus:border-violet-500/50 focus:ring-1 focus:ring-violet-500/30 outline-none transition resize-none"
                                  placeholder="Cuéntame sobre tu proyecto..."></textarea>
                        @error('message') <p class="text-xs text-red-400 mt-1">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit" class="btn-primary w-full justify-center">
                        Enviar mensaje
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
