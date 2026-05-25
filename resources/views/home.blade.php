@extends('layouts.app')

@section('title', $profile['short_name'] . ' · Portafolio')

@section('content')

{{-- ═══════════════════════════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════════════════════════ --}}
<section class="relative pt-32 pb-24 md:pt-40 md:pb-32 overflow-hidden">
    {{-- Fondo decorativo --}}
    <div class="absolute inset-0 grid-pattern"></div>
    <div class="glow-blob bg-violet-600 h-80 w-80 -top-20 -left-10"></div>
    <div class="glow-blob bg-azure-600 h-96 w-96 top-40 -right-20"></div>

    <div class="container-app relative z-10">
        {{-- Etiqueta superior --}}
        <div class="flex items-center gap-3 mb-8 animate-fade-in">
            <span class="relative flex h-2 w-2">
                <span class="absolute inline-flex h-full w-full rounded-full bg-azure-400 opacity-75 animate-ping"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-azure-400"></span>
            </span>
            <span class="font-mono text-xs uppercase tracking-[0.25em] text-fog-400">
                Disponible para nuevos proyectos
            </span>
        </div>

        <h1 class="font-display text-5xl md:text-7xl font-bold leading-[1.05] mb-6 animate-fade-up">
            Hola, soy <br class="md:hidden">
            <span class="text-gradient">Camilo Sánchez</span>.
        </h1>

        <p class="text-lg md:text-xl text-fog-300 max-w-2xl mb-4 animate-fade-up" style="animation-delay: .1s">
            {{ $profile['role'] }}
        </p>

        <p class="text-base text-fog-400 max-w-2xl mb-10 leading-relaxed animate-fade-up" style="animation-delay: .2s">
            {{ $profile['summary'] }}
        </p>

        <div class="flex flex-wrap items-center gap-4 animate-fade-up" style="animation-delay: .3s">
            <a href="#proyectos" class="btn-primary">
                Ver proyectos
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                </svg>
            </a>
            <a href="#contacto" class="btn-ghost">Contáctame</a>
            <a href="{{ $profile['github'] }}" target="_blank" class="text-sm text-fog-400 hover:text-white transition flex items-center gap-2">
                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 .5A11.5 11.5 0 000 12a11.5 11.5 0 007.86 10.94c.58.11.79-.25.79-.56v-2c-3.2.7-3.88-1.36-3.88-1.36-.52-1.32-1.27-1.67-1.27-1.67-1.04-.71.08-.7.08-.7 1.15.08 1.76 1.18 1.76 1.18 1.02 1.75 2.68 1.24 3.34.95.1-.74.4-1.24.72-1.53-2.55-.29-5.24-1.28-5.24-5.7 0-1.26.45-2.29 1.18-3.1-.12-.29-.51-1.47.11-3.05 0 0 .97-.31 3.18 1.18a11 11 0 015.78 0c2.21-1.49 3.17-1.18 3.17-1.18.63 1.58.24 2.76.12 3.05.74.81 1.18 1.84 1.18 3.1 0 4.43-2.7 5.4-5.27 5.69.41.36.78 1.06.78 2.14v3.17c0 .31.21.68.8.56A11.5 11.5 0 0024 12 11.5 11.5 0 0012 .5z"/>
                </svg>
                GitHub
            </a>
        </div>

        {{-- Métricas rápidas --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-20 animate-fade-up" style="animation-delay: .4s">
            <div>
                <div class="font-display text-3xl font-bold text-white">4+</div>
                <div class="text-xs font-mono uppercase tracking-wider text-fog-400 mt-1">Años en tech</div>
            </div>
            <div>
                <div class="font-display text-3xl font-bold text-white">6+</div>
                <div class="text-xs font-mono uppercase tracking-wider text-fog-400 mt-1">Proyectos clave</div>
            </div>
            <div>
                <div class="font-display text-3xl font-bold text-white">2</div>
                <div class="text-xs font-mono uppercase tracking-wider text-fog-400 mt-1">Países (CO · PR)</div>
            </div>
            <div>
                <div class="font-display text-3xl font-bold text-white">∞</div>
                <div class="text-xs font-mono uppercase tracking-wider text-fog-400 mt-1">Curiosidad</div>
            </div>
        </div>
    </div>
</section>

<div class="hr-gradient"></div>

{{-- ═══════════════════════════════════════════════════════════════════
     SOBRE MÍ
═══════════════════════════════════════════════════════════════════ --}}
<section id="sobre-mi" class="py-24 relative">
    <div class="container-app grid md:grid-cols-3 gap-12">
        <div data-reveal>
            <p class="section-eyebrow mb-3">01 · Sobre mí</p>
            <h2 class="section-title">¿Quién soy?</h2>
        </div>
        <div class="md:col-span-2 space-y-5 text-fog-300 leading-relaxed" data-reveal>
            <p>
                Soy <span class="text-white font-medium">Eduard Camilo Sánchez García</span>, ingeniero
                de sistemas egresado de la <span class="text-azure-400">Fundación Universitaria Los Libertadores</span>
                en 2025. Desde Colombia trabajo de forma remota para
                <span class="text-violet-400">Steps Consulting Corp</span> en Puerto Rico, donde construyo
                productos digitales que combinan backend en Laravel y apps móviles en Flutter.
            </p>
            <p>
                Me apasionan los proyectos que requieren mirar el sistema completo: desde la base de datos
                hasta la experiencia del usuario final. He liderado integraciones complejas como Stripe
                Connect, Firebase Auth y publicación en Google Play, además de auditorías de seguridad
                en proyectos Laravel y WordPress.
            </p>
            <p>
                Fuera del código, me gusta el gaming (Minecraft / CurseForge), la Fórmula 1
                (mantengo mi propia liga fantasy) y explorar ideas de negocio. Siempre estoy mejorando
                mi inglés y experimentando con nuevas herramientas de IA aplicadas al desarrollo.
            </p>

            <div class="flex flex-wrap gap-2 pt-4">
                <span class="chip">🇨🇴 Colombia (remoto)</span>
                <span class="chip">💼 Steps Consulting Corp</span>
                <span class="chip">🎓 Ing. de Sistemas · 2025</span>
            </div>
        </div>
    </div>
</section>

<div class="hr-gradient"></div>

{{-- ═══════════════════════════════════════════════════════════════════
     EXPERIENCIA
═══════════════════════════════════════════════════════════════════ --}}
<section id="experiencia" class="py-24 relative">
    <div class="container-app">
        <div class="mb-16 max-w-2xl" data-reveal>
            <p class="section-eyebrow mb-3">02 · Trayectoria</p>
            <h2 class="section-title mb-4">Experiencia profesional</h2>
            <p class="text-fog-400">
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
<section id="estudios" class="py-24 relative">
    <div class="container-app">
        <div class="mb-12 max-w-2xl" data-reveal>
            <p class="section-eyebrow mb-3">03 · Formación</p>
            <h2 class="section-title mb-4">Estudios</h2>
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
<section id="proyectos" class="py-24 relative">
    <div class="container-app">
        <div class="mb-16 max-w-2xl" data-reveal>
            <p class="section-eyebrow mb-3">04 · Selección</p>
            <h2 class="section-title mb-4">Proyectos destacados</h2>
            <p class="text-fog-400">
                Una muestra de las plataformas, apps y sitios donde he participado o liderado el desarrollo.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
            @foreach($projects as $project)
                <article class="card group cursor-pointer relative overflow-hidden" data-reveal>
                    {{-- Glow del acento --}}
                    <div class="absolute -top-20 -right-20 h-40 w-40 rounded-full
                                {{ $project['accent'] === 'azure' ? 'bg-azure-500/20' : 'bg-violet-500/20' }}
                                blur-3xl opacity-0 group-hover:opacity-100 transition-opacity"></div>

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
            @endforeach
        </div>
    </div>
</section>

<div class="hr-gradient"></div>

{{-- ═══════════════════════════════════════════════════════════════════
     SKILLS
═══════════════════════════════════════════════════════════════════ --}}
<section id="skills" class="py-24 relative">
    <div class="container-app">
        <div class="mb-16 max-w-2xl" data-reveal>
            <p class="section-eyebrow mb-3">05 · Stack</p>
            <h2 class="section-title mb-4">Habilidades & herramientas</h2>
            <p class="text-fog-400">
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
<section id="certificaciones" class="py-24 relative">
    <div class="container-app">
        <div class="mb-12 max-w-2xl" data-reveal>
            <p class="section-eyebrow mb-3">06 · Aprendizaje continuo</p>
            <h2 class="section-title mb-4">Certificaciones</h2>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach($certifications as $cert)
                <div class="card !p-5" data-reveal>
                    <div class="h-10 w-10 rounded-lg bg-gradient-to-br from-azure-500/20 to-violet-500/20 border border-white/10 flex items-center justify-center mb-4">
                        <svg class="h-5 w-5 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <h3 class="font-display text-base text-white mb-1 leading-tight">{{ $cert['name'] }}</h3>
                    <p class="text-xs text-fog-400 mb-2">{{ $cert['issuer'] }}</p>
                    <p class="text-xs font-mono text-azure-400">{{ $cert['year'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<div class="hr-gradient"></div>

{{-- ═══════════════════════════════════════════════════════════════════
     HERRAMIENTAS DE IA
═══════════════════════════════════════════════════════════════════ --}}
<section id="ia" class="py-24 relative">
    <div class="container-app">
        <div class="mb-16 max-w-2xl" data-reveal>
            <p class="section-eyebrow mb-3">07 · Productividad</p>
            <h2 class="section-title mb-4">Herramientas de IA que uso</h2>
            <p class="text-fog-400">
                La IA es parte de mi flujo diario: acelera el desarrollo y libera tiempo para pensar en arquitectura.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @foreach($aiTools as $tool)
                <div class="card relative overflow-hidden" data-reveal>
                    <div class="absolute -top-10 -right-10 h-32 w-32 rounded-full bg-violet-500/10 blur-2xl"></div>
                    <div class="relative">
                        <div class="font-mono text-xs text-azure-400 mb-2">// ai-tool</div>
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
<section id="contacto" class="py-24 relative">
    <div class="container-app">
        <div class="card relative overflow-hidden !p-10 md:!p-14" data-reveal>
            <div class="absolute -top-20 -right-20 h-60 w-60 rounded-full bg-violet-500/20 blur-3xl"></div>
            <div class="absolute -bottom-20 -left-20 h-60 w-60 rounded-full bg-azure-500/20 blur-3xl"></div>

            <div class="relative grid md:grid-cols-2 gap-10">
                <div>
                    <p class="section-eyebrow mb-3">08 · Conversemos</p>
                    <h2 class="section-title mb-4">¿Tienes un proyecto en mente?</h2>
                    <p class="text-fog-400 mb-8 leading-relaxed">
                        Estoy abierto a colaboraciones, oportunidades freelance o conversaciones
                        sobre tecnología. Escríbeme y te respondo en menos de 24 horas.
                    </p>

                    <div class="space-y-3">
                        <a href="mailto:{{ $profile['email'] }}" class="flex items-center gap-3 text-fog-300 hover:text-white transition group">
                            <span class="h-9 w-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center group-hover:bg-azure-500/10 group-hover:border-azure-500/30 transition">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </span>
                            <span class="text-sm">{{ $profile['email'] }}</span>
                        </a>
                        <a href="{{ $profile['github'] }}" target="_blank" class="flex items-center gap-3 text-fog-300 hover:text-white transition group">
                            <span class="h-9 w-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center group-hover:bg-violet-500/10 group-hover:border-violet-500/30 transition">
                                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 .5A11.5 11.5 0 000 12a11.5 11.5 0 007.86 10.94c.58.11.79-.25.79-.56v-2c-3.2.7-3.88-1.36-3.88-1.36-.52-1.32-1.27-1.67-1.27-1.67-1.04-.71.08-.7.08-.7 1.15.08 1.76 1.18 1.76 1.18 1.02 1.75 2.68 1.24 3.34.95.1-.74.4-1.24.72-1.53-2.55-.29-5.24-1.28-5.24-5.7 0-1.26.45-2.29 1.18-3.1-.12-.29-.51-1.47.11-3.05 0 0 .97-.31 3.18 1.18a11 11 0 015.78 0c2.21-1.49 3.17-1.18 3.17-1.18.63 1.58.24 2.76.12 3.05.74.81 1.18 1.84 1.18 3.1 0 4.43-2.7 5.4-5.27 5.69.41.36.78 1.06.78 2.14v3.17c0 .31.21.68.8.56A11.5 11.5 0 0024 12 11.5 11.5 0 0012 .5z"/>
                                </svg>
                            </span>
                            <span class="text-sm">github.com/EduardDeUnaGlobal</span>
                        </a>
                        <div class="flex items-center gap-3 text-fog-300">
                            <span class="h-9 w-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </span>
                            <span class="text-sm">{{ $profile['location'] }}</span>
                        </div>
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
