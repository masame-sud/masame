import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            'blanco': {
                DEFAULT: '#F2F2F2'
                    },
            'amarillo': {
                DEFAULT: '#F2BC57'
                    },
            'azul1': {
                DEFAULT: '#9BB8F2'
            },
            'azul2': {
                DEFAULT: '#6D99F2'
            },
            'azul3': {
                DEFAULT: '#417CF2'
            }
        }
    },

    plugins: [forms],
};
