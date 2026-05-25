@extends('layouts.app')

@section('title', 'Contacto · Camilo Sánchez')

@section('content')
<section class="pt-32 pb-24 relative">
    <div class="container-app max-w-2xl">
        <p class="section-eyebrow mb-3">Conversemos</p>
        <h1 class="font-display text-4xl md:text-5xl font-bold mb-4 text-white">Contáctame</h1>
        <p class="text-fog-400 mb-10">Cuéntame en qué puedo ayudarte. Respondo en menos de 24 horas.</p>

        <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
            @csrf
            @if(session('success'))
                <div class="rounded-lg border border-azure-500/30 bg-azure-500/10 p-3 text-sm text-azure-400">{{ session('success') }}</div>
            @endif

            <div>
                <label class="block text-xs font-mono uppercase tracking-wider text-fog-400 mb-2">Nombre</label>
                <input type="text" name="name" required class="w-full rounded-lg border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white focus:border-violet-500/50 outline-none transition">
            </div>
            <div>
                <label class="block text-xs font-mono uppercase tracking-wider text-fog-400 mb-2">Email</label>
                <input type="email" name="email" required class="w-full rounded-lg border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white focus:border-violet-500/50 outline-none transition">
            </div>
            <div>
                <label class="block text-xs font-mono uppercase tracking-wider text-fog-400 mb-2">Mensaje</label>
                <textarea name="message" rows="5" required class="w-full rounded-lg border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white focus:border-violet-500/50 outline-none transition resize-none"></textarea>
            </div>
            <button type="submit" class="btn-primary w-full justify-center">Enviar mensaje</button>
        </form>
    </div>
</section>
@endsection
