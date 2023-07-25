/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: 'jit',
    purge: [
        './templates/**/*.php',
        './frontend/**/*.vue',
    ],
    content: [],
    theme: {
        extend: {},
    },
    plugins: [],
}
