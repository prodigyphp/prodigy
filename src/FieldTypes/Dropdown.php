<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

class Dropdown extends Field {


    public function make($key, $meta)
    {
        return view('prodigy::components.fields.dropdown', ['key' => $key, 'meta' => $meta]);
    }
}