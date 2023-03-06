<?php

use ProdigyPHP\Prodigy\BlockGroups\CustomBlocksGroup;
use ProdigyPHP\Prodigy\BlockGroups\ProdigyBlocksGroup;
use ProdigyPHP\Prodigy\FieldTypes\Code;
use ProdigyPHP\Prodigy\FieldTypes\Color;
use ProdigyPHP\Prodigy\FieldTypes\Dropdown;
use ProdigyPHP\Prodigy\FieldTypes\Group;
use ProdigyPHP\Prodigy\FieldTypes\Image;
use ProdigyPHP\Prodigy\FieldTypes\Menu;
use ProdigyPHP\Prodigy\FieldTypes\Number;
use ProdigyPHP\Prodigy\FieldTypes\Link;
use ProdigyPHP\Prodigy\FieldTypes\NumberWithUnit;
use ProdigyPHP\Prodigy\FieldTypes\PixelGroup;
use ProdigyPHP\Prodigy\FieldTypes\Range;
use ProdigyPHP\Prodigy\FieldTypes\Repeater;
use ProdigyPHP\Prodigy\FieldTypes\Text;
use ProdigyPHP\Prodigy\FieldTypes\TextEditor;

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

    /**
     * The main page within your application that is managed by prodigy.
     */
    'home' => '/how-it-works',

    /**
     * Custom prodigy paths.
     */
    'path' => 'prodigy',

    'custom_blocks_path' => 'resources/views/components/blocks',

    'block_paths' => [
        ProdigyBlocksGroup::class,
        CustomBlocksGroup::class,
        // register blocks from other packages here...
    ],

    'full_page_layout' => 'layouts.app',

    'default' => [
        'unit' => 'px',
        'padding' => '20',
        'max_width' => '1500',
    ],

    'fields' => [
        'text' => Text::class,
        'number' => Number::class,
        'numberwithunit' => NumberWithUnit::class,
        'dropdown' => Dropdown::class,
        'group' => Group::class,
        'texteditor' => TextEditor::class,
        'color' => Color::class,
        'image' => Image::class,
        'pixelgroup' => PixelGroup::class,
        'range' => Range::class,
        'link' => Link::class,
        'repeater' => Repeater::class,
        'menu' => Menu::class,
        'code' => Code::class
        // register more fields here...
    ],
];
