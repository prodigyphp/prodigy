<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Entry;
use ProdigyPHP\Prodigy\Models\Page;

class Menu extends Field
{
    public function make($key, $data, Block|Entry|Page|null $block)
    {
        return view('prodigy::components.fields.menu', ['key' => $key, 'data' => $data, 'block' => $block]);
    }
}
