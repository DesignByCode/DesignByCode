import defaultTheme from 'tailwindcss/defaultTheme';
import colors from "tailwindcss/colors.js";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        "./storage/app/packages/*.{php,text,md}",
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: "class",
    safelist: ['.copy-button', '.language-header', '.fadeIn'],
    theme: {
        extend: {
            colors: {
                primary: colors.indigo,
                secondary: colors.cyan,
                tri: colors.rose,
                gray: colors.slate,
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require("@designbycode/tailwindcss-mask-image"),
        require("@designbycode/tailwindcss-conic-gradient"),
        require("@designbycode/tailwindcss-stripes"),
        require("@designbycode/tailwindcss-text-shadow"),
        require("tailwindcss-attributes"),

        require('@tailwindcss/container-queries'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
