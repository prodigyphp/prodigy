<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

use ProdigyPHP\Prodigy\Models\Block;

class Repeater extends Field {


    public function make($key, $data, Block|null $block)
    {
        return view('prodigy::components.fields.repeater', ['key' => $key, 'data' => $data, 'block' => $block]);
    }
}