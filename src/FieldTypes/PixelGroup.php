<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

use ProdigyPHP\Prodigy\Models\Block;

class PixelGroup extends Field {


    public array $subfields = [
        'united_values' => 'nullable|boolean', // boolean. true means keep values together and use all, false means use individual values.
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