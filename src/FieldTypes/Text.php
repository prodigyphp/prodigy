<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

class Text extends Field {


    public function make($key, $meta)
    {
        return view('prodigy::components.fields.text', ['key' => $key, 'meta' => $meta]);
    }
}