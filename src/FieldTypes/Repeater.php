<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Entry;

class Repeater extends Field {


    public function make($key, $data, Block|Entry|null $block)
    {
        return view('prodigy::components.fields.repeater', ['key' => $key, 'data' => $data, 'block' => $block]);
    }
}