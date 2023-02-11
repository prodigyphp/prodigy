import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/prodigy.css', 'resources/js/prodigy.js'],
            refresh: true,
        }),
    ],
})
