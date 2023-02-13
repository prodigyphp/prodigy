<?php

use ProdigyPHP\Prodigy\BlockGroups\CustomBlocksGroup;
use ProdigyPHP\Prodigy\BlockGroups\ProdigyBlocksGroup;
use ProdigyPHP\Prodigy\FieldTypes\Dropdown;
use ProdigyPHP\Prodigy\FieldTypes\Text;

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

    'custom_blocks_path' => 'resources/views/components/blocks',

    'block_paths' => [
        ProdigyBlocksGroup::class,
        CustomBlocksGroup::class,

        // register blocks from other packages here...
    ],

    'fields' => [
        'text' => Text::class,
        'dropdown' => Dropdown::class

        // register more fields here...
    ]
];
