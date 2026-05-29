@extends('layouts.app')

@section('title', $project['name'] . ' · Camilo Sánchez')

@section('content')
<section class="pt-32 pb-24 relative">
    <div class="container-app max-w-3xl">
        <a href="{{ route('projects') }}" class="text-sm text-linen-600 hover:text-linen-900 transition inline-flex items-center gap-2 mb-10">
            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Volver a proyectos
        </a>

        <p class="section-eyebrow mb-3">{{ $project['year'] }}</p>
        <h1 class="font-display text-4xl md:text-5xl font-bold mb-4 text-white">{{ $project['name'] }}</h1>
        <p class="text-lg text-linen-700 mb-8">{{ $project['tagline'] }}</p>

        <div class="prose prose-invert max-w-none mb-8">
            <p class="text-linen-700 leading-relaxed">{{ $project['description'] }}</p>
        </div>

        <div class="grid sm:grid-cols-2 gap-6 mb-10">
            <div>
                <p class="font-mono text-xs uppercase tracking-wider text-linen-600 mb-2">Rol</p>
                <p class="text-white">{{ $project['role'] }}</p>
            </div>
            <div>
                <p class="font-mono text-xs uppercase tracking-wider text-linen-600 mb-2">Stack</p>
                <div class="flex flex-wrap gap-1.5">
                    @foreach($project['stack'] as $tech)
                        <span class="chip">{{ $tech }}</span>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="card bg-linen-200">
            <p class="text-sm text-linen-600">
                <span class="text-white">Próximamente:</span> capturas, demo en vivo y enlace al repositorio.
            </p>
        </div>
    </div>
</section>
@endsection
