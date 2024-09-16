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
            colors : {
                'primary' : '#9c2c90',
                'primary-900' : '#0c4a6e',
                'primary-500' : '#9c2c9090',
                'primary-200' : '#9c2c9030',
                'primary-100' : '#e0f2fe',
            }
        },
    },

    plugins: [forms],
};
