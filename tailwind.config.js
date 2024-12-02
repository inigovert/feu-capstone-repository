import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                    feugreen: "#009900",
                    feugold: "#ffc20e"
                },
                fontFamily: {
                    sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                },
        },
    },
    plugins: [],
};
