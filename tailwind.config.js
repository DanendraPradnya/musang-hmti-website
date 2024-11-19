import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/musang.blade.php',
        './resources/views/login.blade.php',
        './resources/views/rangkaian.blade.php',
        './resources/views/register.blade.php',
        './resources/js/app.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                'Primary': '#785233',    
            }
        },
    },
    plugins: [],
};
