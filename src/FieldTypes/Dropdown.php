<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

use ProdigyPHP\Prodigy\Models\Block;

class Dropdown extends Field {


    public function make($key, $data, Block|null $block)
    {
        return view('prodigy::components.fields.dropdown', ['key' => $key, 'data' => $data]);
    }
}