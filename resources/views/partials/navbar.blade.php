<nav x-data="{ open: false, scrolled: false }"
     x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 30)"
     :class="scrolled ? 'bg-ink-950/85 backdrop-blur-xl border-b border-white/5 shadow-lg shadow-black/20' : 'bg-transparent border-b border-transparent'"
     class="fixed inset-x-0 top-0 z-50 transition-all duration-500">
    <div class="container-app flex h-16 items-center justify-between">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center gap-2.5 group">
            <div class="relative h-8 w-8 rounded-lg bg-gradient-to-br from-azure-500 to-violet-600 flex items-center justify-center font-display font-bold text-white text-sm shadow-lg shadow-violet-500/30 transition-shadow duration-300 group-hover:shadow-violet-500/50">
                CS
            </div>
            <span class="font-display font-semibold text-white tracking-tight transition-colors duration-200 group-hover:text-gradient">
                Camilo<span class="text-violet-400">.</span>
            </span>
        </a>

        {{-- Links desktop --}}
        <div class="hidden md:flex items-center gap-8">
            <a href="{{ route('home') }}#sobre-mi"   class="nav-link">Sobre mí</a>
            <a href="{{ route('home') }}#experiencia" class="nav-link">Experiencia</a>
            <a href="{{ route('home') }}#proyectos"   class="nav-link">Proyectos</a>
            <a href="{{ route('home') }}#skills"      class="nav-link">Skills</a>
            <a href="{{ route('home') }}#contacto"    class="btn-primary !py-2 !px-4 !text-xs">
                Contacto
            </a>
        </div>

        {{-- Botón móvil --}}
        <button @click="open = !open" class="md:hidden text-fog-200 hover:text-white transition-colors" aria-label="Menú">
            <svg x-show="!open" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <svg x-show="open" x-cloak class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    {{-- Menú móvil --}}
    <div x-show="open"
         x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="md:hidden border-t border-white/5 bg-ink-950/95 backdrop-blur-xl">
        <div class="container-app py-5 flex flex-col gap-4">
            <a href="{{ route('home') }}#sobre-mi"    @click="open=false" class="text-sm text-fog-300 hover:text-white py-1 transition-colors">Sobre mí</a>
            <a href="{{ route('home') }}#experiencia" @click="open=false" class="text-sm text-fog-300 hover:text-white py-1 transition-colors">Experiencia</a>
            <a href="{{ route('home') }}#proyectos"   @click="open=false" class="text-sm text-fog-300 hover:text-white py-1 transition-colors">Proyectos</a>
            <a href="{{ route('home') }}#skills"      @click="open=false" class="text-sm text-fog-300 hover:text-white py-1 transition-colors">Skills</a>
            <a href="{{ route('home') }}#contacto"    @click="open=false" class="btn-primary !py-2 !text-xs self-start">Contacto</a>
        </div>
    </div>
</nav>
