<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Include CSS
    |--------------------------------------------------------------------------
    |
    | The modal uses TailwindCSS, if you don't use TailwindCSS you will need
    | to set this parameter to true. This includes the modern-normalize css.
    |
    */
    'include_css' => false,

    'block_paths' => [
        'vendor/prodigyphp/prodigy/resources/views/blocks', // Standard prodigy blocks
        'resources/views/components/blocks' // custom blocks
        // register blocks from other packages here...
    ]
];
