<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

use ProdigyPHP\Prodigy\Models\Block;

class Range extends Field {


    public function make($key, $data, Block|null $block)
    {
        return view('prodigy::components.fields.range', ['key' => $key, 'data' => $data]);
    }
}