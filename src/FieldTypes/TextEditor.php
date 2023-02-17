<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

use ProdigyPHP\Prodigy\Models\Block;

class TextEditor extends Field {


    public function make($key, $data, Block|null $block)
    {
        return view('prodigy::components.fields.texteditor', ['key' => $key, 'data' => $data]);
    }
}