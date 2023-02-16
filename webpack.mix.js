const mix = require('laravel-mix');

mix.js('resources/js/prodigy.js', 'public/')
mix.js('resources/ckeditor/build/ckeditor.js', 'public/')
    .postCss("resources/css/prodigy.css", "public/", [
        require("tailwindcss"),
    ]);
