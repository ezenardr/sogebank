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
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors :{
                "primary-3" : "#2D60FF",
                "primary-2" : "#343C6A",
                "primary-1" : "#FEAA09",
                "secondary" : "#FE5C73",
                "secondary-2" : "#16DBCC"
            }
        },
    },
    plugins: [],
};
