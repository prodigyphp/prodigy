<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Entry;

class NumberWithUnit extends Field {


    public array $subfields = [
        'value' => 'nullable|numeric',
        'unit' => 'required',
    ];

    public function make($key, array $data, Block|Entry|null $block)
    {
        return view('prodigy::components.fields.numberwithunit', ['key' => $key, 'data' => $data, 'block' => $block]);
    }
}