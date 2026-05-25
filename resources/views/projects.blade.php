@extends('layouts.app')

@section('title', 'Proyectos · Camilo Sánchez')

@section('content')
<section class="pt-32 pb-24 relative">
    <div class="container-app">
        <div class="mb-14 max-w-2xl">
            <p class="section-eyebrow mb-3">Portafolio</p>
            <h1 class="font-display text-4xl md:text-5xl font-bold mb-4 text-white">Todos los proyectos</h1>
            <p class="text-fog-400">Listado completo de lo que he construido.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
            @foreach($projects as $project)
                <a href="{{ route('projects.show', $project['slug']) }}" class="card group block">
                    <div class="flex items-start justify-between mb-3">
                        <h3 class="font-display text-2xl text-white group-hover:text-gradient transition">{{ $project['name'] }}</h3>
                        <span class="{{ $project['accent'] === 'azure' ? 'badge-azure' : 'badge-violet' }}">{{ $project['year'] }}</span>
                    </div>
                    <p class="text-sm text-fog-300 mb-3">{{ $project['tagline'] }}</p>
                    <p class="text-sm text-fog-400 mb-4">{{ $project['description'] }}</p>
                    <div class="flex flex-wrap gap-1.5">
                        @foreach($project['stack'] as $tech)
                            <span class="chip">{{ $tech }}</span>
                        @endforeach
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endsection
