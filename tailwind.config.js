import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                // Display: titular, con personalidad
                display: ['"Space Grotesk"', ...defaultTheme.fontFamily.sans],
                // Sans: cuerpo legible
                sans: ['"Inter"', ...defaultTheme.fontFamily.sans],
                // Mono: para código y detalles tech
                mono: ['"JetBrains Mono"', ...defaultTheme.fontFamily.mono],
            },
            colors: {
                // Paleta personalizada: negro, gris, blanco, azul, morado
                ink: {
                    950: '#0a0a0f',
                    900: '#0f1014',
                    800: '#16181f',
                    700: '#1f2129',
                    600: '#2a2d38',
                },
                fog: {
                    500: '#6b7280',
                    400: '#9ca3af',
                    300: '#cbd5e1',
                    200: '#e2e8f0',
                    100: '#f1f5f9',
                },
                azure: {
                    400: '#60a5fa',
                    500: '#3b82f6',
                    600: '#2563eb',
                    700: '#1d4ed8',
                },
                violet: {
                    400: '#a78bfa',
                    500: '#8b5cf6',
                    600: '#7c3aed',
                    700: '#6d28d9',
                },
            },
            backgroundImage: {
                'grid-faint': "linear-gradient(rgba(255,255,255,0.04) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.04) 1px, transparent 1px)",
                'radial-glow': "radial-gradient(circle at 50% 0%, rgba(139,92,246,0.18), transparent 60%)",
            },
            backgroundSize: {
                'grid-32': '32px 32px',
            },
            animation: {
                'fade-up': 'fadeUp 0.7s ease-out both',
                'fade-in': 'fadeIn 0.6s ease-out both',
                'float-slow': 'float 8s ease-in-out infinite',
                'glow-pulse': 'glow 4s ease-in-out infinite',
            },
            keyframes: {
                fadeUp: {
                    '0%': { opacity: '0', transform: 'translateY(20px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                fadeIn: {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                },
                float: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-12px)' },
                },
                glow: {
                    '0%, 100%': { opacity: '0.45' },
                    '50%': { opacity: '0.85' },
                },
            },
        },
    },

    plugins: [forms, typography],
};
