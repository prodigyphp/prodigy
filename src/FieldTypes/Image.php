<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

class Image extends Field {


    public function make($key, $data)
    {
        return view('prodigy::components.fields.image', ['key' => $key, 'data' => $data]);
    }
}