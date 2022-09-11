const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
                theme: "'Inria Serif', serif",
                alt: "'Permanent Marker', cursive",
            },
            colors: {
                "theme-red": "#eb1d25",
                "theme-dark": "#c42c34",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
