<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

use ProdigyPHP\Prodigy\Models\Block;

class Text extends Field {


    public function make($key, $data, Block|null $block)
    {
        return view('prodigy::components.fields.text', ['key' => $key, 'data' => $data]);
    }
}