<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

class Text extends Field {


    public function make($key, $data)
    {
        return view('prodigy::components.fields.text', ['key' => $key, 'data' => $data]);
    }
}