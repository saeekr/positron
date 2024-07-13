/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                // sans: ["Inter var", ...defaultTheme.fontFamily.sans],
                'pt-one': ['"PT One"', 'sans-serif'],
            },
        },
        plugins: [],
    },
};
