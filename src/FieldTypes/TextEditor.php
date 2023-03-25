<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Entry;
use ProdigyPHP\Prodigy\Models\Page;

class TextEditor extends Field
{
    public function make($key, $data, Block|Entry|Page|null $block)
    {
        return view('prodigy::components.fields.texteditor', ['key' => $key, 'data' => $data]);
    }
}
