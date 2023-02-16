<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

class TextEditor extends Field {


    public function make($key, $data)
    {
        return view('prodigy::components.fields.texteditor', ['key' => $key, 'data' => $data]);
    }
}