const defaultTheme = require('tailwindcss/defaultTheme')
const colors = require('tailwindcss/colors')

module.exports = {
    prefix: 'pro-',
    content: [
        './resources/**/*.blade.php',
    ],
    extend: {},
    theme: {
        extend: {
            fontFamily: {
                sans: ['Mona Sans', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                gray: colors.neutral
                // Configure your color palette here
            }
        },
    },
}
