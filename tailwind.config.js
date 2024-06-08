import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
             fontSize: {
        '10xl': '10rem',
        '11xl': '11rem',
        '12xl': '12rem',
                },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                dm: ["DM Serif Display"],
                abril: ["Abril Fatface"],
            },
        },
    },

    plugins: [forms],
};
