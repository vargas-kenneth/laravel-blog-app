import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

const { addDynamicIconSelectors } = require('@iconify/tailwind');

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    
    darkMode: 'class',

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                lightBlue: '#0077b6',
                darkBlue: '#001d3d',
            }
        },
    },

    plugins: [
        forms,
        addDynamicIconSelectors(),
    ],
};
