<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

use ProdigyPHP\Prodigy\Models\Block;

class Image extends Field {


    public function make($key, $data, Block|null $block)
    {
        return view('prodigy::components.fields.image', ['key' => $key, 'data' => $data]);
    }
}