<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Entry;
use ProdigyPHP\Prodigy\Models\Page;

class NumberWithUnit extends Field {


    public array $subfields = [
        'value' => 'nullable|numeric',
        'unit' => 'required',
    ];

    public function make($key, array $data, Block|Entry|Page|null $block)
    {
        return view('prodigy::components.fields.numberwithunit', ['key' => $key, 'data' => $data, 'block' => $block]);
    }
}