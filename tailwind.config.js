import defaultTheme from 'tailwindcss/defaultTheme';
import colors from "tailwindcss/colors.js";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: "class",
    safelist: ['.copy-button', '.language-header'],
    theme: {
        extend: {
            colors: {
                primary: colors.indigo,
                gray: colors.slate
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require("@designbycode/tailwindcss-mask-image"),
        require('@tailwindcss/forms'),

    ],
};
