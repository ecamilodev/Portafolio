{{-- ═══════════════════════════════════════════════════════════════════
     CRT INTRO — Efecto de encendido de TV con glitch
     Se ejecuta solo la primera vez por sesión.
     Se controla con sessionStorage para no repetir.
═══════════════════════════════════════════════════════════════════ --}}
<div id="crt-intro"
     x-data="crtIntro()"
     x-init="init()"
     x-show="visible"
     x-cloak
     style="display: none;"
     class="fixed inset-0 z-[100] bg-ink-950 overflow-hidden pointer-events-none">

    {{-- Punto inicial blanco --}}
    <div x-ref="dot"
         class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2
                rounded-full bg-white opacity-0"
         style="width: 0; height: 0; box-shadow: 0 0 20px white, 0 0 40px var(--color-violet-400);">
    </div>

    {{-- Línea horizontal que se expande --}}
    <div x-ref="hline"
         class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2
                bg-white opacity-0"
         style="width: 0; height: 0; box-shadow: 0 0 30px white, 0 0 60px var(--color-violet-400);">
    </div>

    {{-- Flash blanco para los glitches --}}
    <div x-ref="flicker"
         class="absolute inset-0 bg-white opacity-0">
    </div>

    {{-- Barras de glitch RGB (efecto chromatic aberration) --}}
    <div x-ref="glitch1"
         class="absolute inset-0 opacity-0"
         style="background: repeating-linear-gradient(
                    90deg,
                    transparent 0,
                    transparent 2px,
                    rgba(96, 165, 250, 0.4) 2px,
                    rgba(96, 165, 250, 0.4) 3px);
                mix-blend-mode: screen;">
    </div>

    <div x-ref="glitch2"
         class="absolute inset-0 opacity-0"
         style="background: repeating-linear-gradient(
                    90deg,
                    transparent 0,
                    transparent 2px,
                    rgba(167, 139, 250, 0.4) 2px,
                    rgba(167, 139, 250, 0.4) 3px);
                mix-blend-mode: screen;">
    </div>

    {{-- Texto fugaz tipo terminal --}}
    <div x-ref="terminal"
         class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2
                font-mono text-xs text-azure-400 opacity-0 whitespace-nowrap">
        <span class="text-violet-400">●</span> SYSTEM_BOOT · PORTFOLIO.v1
    </div>
</div>

<script>
    function crtIntro() {
        return {
            visible: false,

            init() {
                // Sólo se reproduce 1 vez por sesión
                if (sessionStorage.getItem('crt_played')) return;
                if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

                this.visible = true;
                sessionStorage.setItem('crt_played', '1');

                // Bloquear scroll mientras dura el efecto
                document.body.style.overflow = 'hidden';

                // Lanzar la secuencia animada
                this.$nextTick(() => this.play());
            },

            play() {
                const { dot, hline, flicker, glitch1, glitch2, terminal } = this.$refs;

                // 1) Aparece el punto central
                requestAnimationFrame(() => {
                    dot.style.transition = 'width 0.12s ease-out, height 0.12s ease-out, opacity 0.08s';
                    dot.style.width = '8px';
                    dot.style.height = '8px';
                    dot.style.opacity = '1';
                });

                // 2) El punto se convierte en línea horizontal
                setTimeout(() => {
                    dot.style.opacity = '0';
                    hline.style.opacity = '1';
                    hline.style.height = '2px';
                    hline.animate(
                        [
                            { width: '8px' },
                            { width: '100vw' }
                        ],
                        { duration: 220, fill: 'forwards', easing: 'ease-out' }
                    );
                }, 180);

                // 3) Glitch flickers + barras RGB
                const flickerTimes = [380, 460, 540, 620, 700, 800];
                flickerTimes.forEach((t, i) => {
                    setTimeout(() => {
                        flicker.style.transition = 'opacity 0.04s';
                        flicker.style.opacity = i % 2 === 0 ? '0.45' : '0.15';
                        setTimeout(() => flicker.style.opacity = '0', 40);

                        // Barras RGB alternadas
                        if (i % 2 === 0) {
                            glitch1.style.opacity = '1';
                            glitch2.style.opacity = '0';
                        } else {
                            glitch1.style.opacity = '0';
                            glitch2.style.opacity = '1';
                        }
                    }, t);
                });

                // 4) Texto terminal aparece durante los glitches
                setTimeout(() => {
                    terminal.style.transition = 'opacity 0.15s';
                    terminal.style.opacity = '1';
                }, 420);

                // 5) Línea se expande verticalmente abriendo la pantalla
                setTimeout(() => {
                    hline.style.transition = 'height 0.5s ease-out, opacity 0.5s ease-out';
                    hline.style.height = '100vh';
                    hline.style.opacity = '0';
                }, 850);

                // 6) Apagar glitches y texto
                setTimeout(() => {
                    glitch1.style.transition = 'opacity 0.4s';
                    glitch2.style.transition = 'opacity 0.4s';
                    terminal.style.transition = 'opacity 0.4s';
                    glitch1.style.opacity = '0';
                    glitch2.style.opacity = '0';
                    terminal.style.opacity = '0';
                }, 1200);

                // 7) Fade out final del overlay
                setTimeout(() => {
                    const overlay = document.getElementById('crt-intro');
                    overlay.style.transition = 'opacity 0.4s ease-out';
                    overlay.style.opacity = '0';
                }, 1500);

                // 8) Quitar overlay y restaurar scroll
                setTimeout(() => {
                    this.visible = false;
                    document.body.style.overflow = '';
                }, 1950);
            }
        };
    }
</script>
