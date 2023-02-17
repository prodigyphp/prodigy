<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

class Color extends Field {


    public function make($key, $data)
    {
        return view('prodigy::components.fields.color', ['key' => $key, 'data' => $data]);
    }
}