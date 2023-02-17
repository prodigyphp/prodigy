<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

use ProdigyPHP\Prodigy\Models\Block;

class Color extends Field {


    public function make($key, $data, Block|null $block)
    {
        return view('prodigy::components.fields.color', ['key' => $key, 'data' => $data]);
    }
}