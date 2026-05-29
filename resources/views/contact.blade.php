@extends('layouts.app')

@section('title', 'Contacto · Camilo Sánchez')

@section('content')
<section class="pt-32 pb-24 relative">
    <div class="container-app max-w-2xl">
        <p class="section-eyebrow mb-3">Conversemos</p>
        <h1 class="font-display text-4xl md:text-5xl font-bold mb-4 text-linen-900">Contáctame</h1>
        <p class="text-linen-600 mb-10">Cuéntame en qué puedo ayudarte. Respondo en menos de 24 horas.</p>

        <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
            @csrf
            @if(session('success'))
                <div class="rounded-lg border border-clay-600/25 bg-clay-600/8 p-3 text-sm text-clay-600">{{ session('success') }}</div>
            @endif

            <div>
                <label for="contact-name" class="block text-xs font-mono uppercase tracking-wider text-linen-600 mb-2">Nombre</label>
                <input type="text" id="contact-name" name="name" required
                       class="w-full rounded-lg border border-linen-300 bg-linen-100 px-4 py-2.5 text-sm text-linen-900 placeholder-linen-500 focus:border-clay-600/40 focus:ring-1 focus:ring-clay-600/20 outline-none transition-colors"
                       placeholder="Tu nombre">
            </div>
            <div>
                <label for="contact-email" class="block text-xs font-mono uppercase tracking-wider text-linen-600 mb-2">Email</label>
                <input type="email" id="contact-email" name="email" required
                       class="w-full rounded-lg border border-linen-300 bg-linen-100 px-4 py-2.5 text-sm text-linen-900 placeholder-linen-500 focus:border-clay-600/40 focus:ring-1 focus:ring-clay-600/20 outline-none transition-colors"
                       placeholder="tu@email.com">
            </div>
            <div>
                <label for="contact-message" class="block text-xs font-mono uppercase tracking-wider text-linen-600 mb-2">Mensaje</label>
                <textarea id="contact-message" name="message" rows="5" required
                          class="w-full rounded-lg border border-linen-300 bg-linen-100 px-4 py-2.5 text-sm text-linen-900 placeholder-linen-500 focus:border-clay-600/40 focus:ring-1 focus:ring-clay-600/20 outline-none transition-colors resize-none"
                          placeholder="Cuéntame sobre tu proyecto..."></textarea>
            </div>
            <button type="submit" class="btn-primary w-full justify-center">Enviar mensaje</button>
        </form>
    </div>
</section>
@endsection
