/** @type {import('tailwindcss').Config} */
export default {
    content: ['./index.html', './testing/index.php', './src/**/*.{vue,js,ts,jsx,tsx}'],
    theme: {
        extend: {},
    },
    plugins: [require('daisyui')],
    daisyui: {
        themes: [
            {
                light: {
                    ...require('daisyui/src/theming/themes')['[data-theme=dark]'],
                    primary: 'white',
                    "primary-content" : 'dark',  
                    "base-100" : "#191919"
                },
            },
        ],
    },
};
