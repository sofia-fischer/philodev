const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './src/**/*.html',
        './src/**/*.blade.php',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                bluegray: {
                    50: '#f8fafc',
                    100: '#f1f5f9',
                    200: '#e2e8f0',
                    300: '#cbd5e1',
                    400: '#94a3b8',
                    500: '#64748b',
                    600: '#475569',
                    700: '#334155',
                    800: '#212f45',
                    900: '#151515',
                },
            }
        },
        // custom stuff
        backgroundPosition: {
            left: 'left',
            'left-center': 'center',
            'left-80': 'center left 20rem',
            'left-60': 'center left 15rem',
            'left-40': 'center left 10rem',
            'left-20': 'center left 5rem',
            'left-0': 'center left',
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],


}
