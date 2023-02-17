<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

use ProdigyPHP\Prodigy\Models\Block;

class Group extends Field {


    public function make($key, $data, Block|null $block)
    {
        return view('prodigy::components.fields.group', ['key' => $key, 'data' => $data]);
    }
}