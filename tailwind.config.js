import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/musang.blade.php',
        './resources/views/result2.blade.php',
        './resources/views/login.blade.php',
        './resources/views/rangkaian.blade.php',
        './resources/views/register.blade.php',
        './resources/views/pendaftaran.blade.php',
        './resources/js/app.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },  
            colors: {
                'Primary': '#785233',  // Menambahkan warna primary
                'musang': '#000000',
                'cokelat-tua': '#7E4C3C',
                'cokelat-muda': '#ECE3D9',
                'putih': '#FFFFFF',
                'hitam': '#1C1C1C',
                'kuning-emas': '#F5D697',
            },
            backgroundImage: {
                'musang-pattern': "url('/public/css/Pakem Bongkaran.png')"
            },
        },
    },
    plugins: [],
};
