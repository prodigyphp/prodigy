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
    | Home Page
    |--------------------------------------------------------------------------
    |
    | Prodigy usually defaults to the home page, but this will get used for redirects
    | throughout the system (logging in, etc.)
    |
    */
    'home' => '/',

    /*
    |--------------------------------------------------------------------------
    | Access Emails
    |--------------------------------------------------------------------------
    |
    | Define the user emails which should have access to use Prodigy.
    |
    */
    'access_emails' => [],

    /*
    |--------------------------------------------------------------------------
    | Prodigy URL
    |--------------------------------------------------------------------------
    |
    | Currently it's only /prodigy/login. Customize if you want to change
    | where prodigy resides. No need for an opening slash.
    |
    */
    'path' => 'prodigy',

    /*
    |--------------------------------------------------------------------------
    | Fields
    |--------------------------------------------------------------------------
    |
    | If you want to define your own field, for use in the CMS, you totally
    | can! I'm sure there are lots of interesting use-cases possible.
    | In particular, use PixelGroup as an example of multi-field management.
    |
    */
    'fields' => [
        'code' => Code::class,
        'color' => Color::class,
        'dropdown' => Dropdown::class,
        'group' => Group::class,
        'image' => Image::class,
        'link' => Link::class,
        'menu' => Menu::class,
        'number' => Number::class,
        'numberwithunit' => NumberWithUnit::class,
        'pixelgroup' => PixelGroup::class,
        'range' => Range::class,
        'repeater' => Repeater::class,
        'text' => Text::class,
        'texteditor' => TextEditor::class,
        // register more fields here...
    ],

    /*
    |--------------------------------------------------------------------------
    | Blocks Path
    |--------------------------------------------------------------------------
    |
    | If you want to register blocks somewhere else, you can...probably.
    | Don't judge, it's an alpha.
    | @TODO test this.
    |
    */
    'custom_blocks_path' => 'resources/views/components/blocks',

    /*
    |--------------------------------------------------------------------------
    | Load blocks from packages
    |--------------------------------------------------------------------------
    |
    | If you had a bunch of blocks in a package, you could
    | pull them in by adding them here.
    |
    */
    'block_paths' => [
        ProdigyBlocksGroup::class,
        CustomBlocksGroup::class,
        // register blocks from other packages here...
    ],

    /*
    |--------------------------------------------------------------------------
    | Full Page Layout
    |--------------------------------------------------------------------------
    |
    | Livewire (and Prodigy) default to using /layouts/app.blade.php for
    | full-page layouts. You can change that if you'd like. The view
    | should probably be a full page, empty view.
    |
    */
    'full_page_layout' => 'layouts.app',

    /*
    |--------------------------------------------------------------------------
    | Default properties
    |--------------------------------------------------------------------------
    |
    | If you want to change what the default spacing unit or value is,
    | do that here. In particular, if you're only using Prodigy for
    | custom blocks, it can be useful to set padding to zero.
    |
    */
    'default' => [
        'unit' => 'px',
        'padding' => '20',
        'max_width' => '1500',
    ],

];
