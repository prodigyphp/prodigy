<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

use ProdigyPHP\Prodigy\Models\Block;

class PixelGroup extends Field {


    public array $subfields = [
        'united_values' => 'boolean', // boolean. true means keep values together and use all, false means use individual values.
        'all' => 'nullable|numeric',
        'top' => 'nullable|numeric',
        'right' => 'nullable|numeric',
        'bottom' => 'nullable|numeric',
        'left' => 'nullable|numeric',
    ];

    public function make($key, array $data, Block|null $block)
    {
        return view('prodigy::components.fields.pixelgroup', ['key' => $key, 'data' => $data, 'block' => $block]);
    }
}