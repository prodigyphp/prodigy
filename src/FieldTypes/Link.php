<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Entry;

class Link extends Field {


    public function make($key, $data, Block|Entry|null $block)
    {
        return view('prodigy::components.fields.link', ['key' => $key, 'data' => $data]);
    }
}