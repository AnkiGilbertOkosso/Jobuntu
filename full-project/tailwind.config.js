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
            colors: {
                primary: '#570AF1',
                primarytext: '#5E6670',
                secondarytext: "#18191C",
                searchcolor: "#570AF1",
                position: "#0A65CC",
                featured: "#E05151",
                nav:'#F1F2F4'
              },
            fontFamily: {
                sans: ['Quicksand', 'sans-serif'],
            },
        },
    },

    plugins: [forms],
};
