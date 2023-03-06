const mix = require('laravel-mix');

mix.js('resources/js/prodigy.js', 'public/js')
mix.js('resources/js/alpine.js', 'public/js')
mix.copy('resources/ckeditor/build/ckeditor.js', 'public/js')
mix.copy('resources/codemirror/codemirror.js', 'public/js')
    .postCss("resources/css/prodigy.css", "public/css/", [
        require("tailwindcss"),
    ]);
