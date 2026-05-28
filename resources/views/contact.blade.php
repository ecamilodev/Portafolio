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
                <label for="contact-name" class="block text-xs font-mono uppercase tracking-wider text-fog-400 mb-2">Nombre</label>
                <input type="text" id="contact-name" name="name" required
                       class="w-full rounded-lg border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white placeholder-fog-500 focus:border-violet-500/50 focus:ring-1 focus:ring-violet-500/30 outline-none transition-colors"
                       placeholder="Tu nombre">
            </div>
            <div>
                <label for="contact-email" class="block text-xs font-mono uppercase tracking-wider text-fog-400 mb-2">Email</label>
                <input type="email" id="contact-email" name="email" required
                       class="w-full rounded-lg border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white placeholder-fog-500 focus:border-violet-500/50 focus:ring-1 focus:ring-violet-500/30 outline-none transition-colors"
                       placeholder="tu@email.com">
            </div>
            <div>
                <label for="contact-message" class="block text-xs font-mono uppercase tracking-wider text-fog-400 mb-2">Mensaje</label>
                <textarea id="contact-message" name="message" rows="5" required
                          class="w-full rounded-lg border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white placeholder-fog-500 focus:border-violet-500/50 focus:ring-1 focus:ring-violet-500/30 outline-none transition-colors resize-none"
                          placeholder="Cuéntame sobre tu proyecto..."></textarea>
            </div>
            <button type="submit" class="btn-primary w-full justify-center">Enviar mensaje</button>
        </form>
    </div>
</section>
@endsection
