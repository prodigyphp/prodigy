const defaultTheme = require('tailwindcss/defaultTheme')
const colors = require('tailwindcss/colors')

module.exports = {
    prefix: 'pro-',
    content: [
        './resources/**/*.blade.php',
    ],
    extend: {},
    // corePlugins: {
    //     preflight: false,
    // },
    theme: {
        extend: {
            fontFamily: {
                sans: ['Mona Sans', ...defaultTheme.fontFamily.sans],
                mono: ['Fira Code', ...defaultTheme.fontFamily.mono]
            },
            colors: {
                gray: colors.neutral,
                blue: {
                    50: '#E3EAF7',
                    100: '#D6E1FA',
                    200: '#C0D4FD',
                    300: '#95B9FB',
                    400: '#6F9CF8',
                    500: '#3E6DF3',
                    600: '#473FEB',
                    700: '#3226D4',
                    800: '#3423B3',
                    900: '#151133',
                },
            }
        },
    },
    safelist: [
        'pro-grid-cols-1', 'pro-grid-cols-2', 'pro-grid-cols-3', 'pro-grid-cols-4', 'pro-grid-cols-5', 'pro-grid-cols-6',
        'md:pro-grid-cols-1', 'md:pro-grid-cols-2', 'md:pro-grid-cols-3', 'md:pro-grid-cols-4', 'md:pro-grid-cols-5', 'md:pro-grid-cols-6',
        'lg:pro-grid-cols-1', 'lg:pro-grid-cols-2', 'lg:pro-grid-cols-3', 'lg:pro-grid-cols-4', 'lg:pro-grid-cols-5', 'lg:pro-grid-cols-6',
    ]
}
