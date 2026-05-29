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
                // Paleta oscura (compatibilidad con otros archivos)
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
                // Paleta clara — tema "The First Conversation"
                linen: {
                    50:  '#fdfbf8',
                    100: '#faf6f1',
                    200: '#f0e9df',
                    300: '#e4d9cd',
                    400: '#c8b9a9',
                    500: '#9a8a79',
                    600: '#6e5d4c',
                    700: '#4d3f32',
                    800: '#362d22',
                    900: '#1e1610',
                    950: '#120e08',
                },
                clay: {
                    50:  '#fdf3ee',
                    100: '#fae0d0',
                    200: '#f4bea0',
                    300: '#ec9470',
                    400: '#e06f44',
                    500: '#cf5928',
                    600: '#a0451e',
                    700: '#823516',
                    800: '#6b2b10',
                    900: '#4f1f0a',
                    950: '#2e1106',
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
