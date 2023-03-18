<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Entry;
use ProdigyPHP\Prodigy\Models\Page;

class Boolean extends Field {


    public function make($key, $data, Block|Entry|Page|null $block)
    {
        return view('prodigy::components.fields.boolean', ['key' => $key, 'data' => $data]);
    }
}