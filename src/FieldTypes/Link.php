<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

use ProdigyPHP\Prodigy\Models\Block;

class Link extends Field {


    public function make($key, $data, Block|null $block)
    {
        return view('prodigy::components.fields.link', ['key' => $key, 'data' => $data]);
    }
}