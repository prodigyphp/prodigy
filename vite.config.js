import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
    plugins: [
        laravel([
                'resources/css/prodigy.css',
                'resources/js/prodigy.js'
            ]
        ),
    ],
    resolve: {
        alias: {
            'styles': '/resources/css/prodigy.css',
            'scripts': '/resources/js/prodigy.js',
        },
    },
})
