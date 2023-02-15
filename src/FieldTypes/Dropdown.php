<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

class Dropdown extends Field {


    public function make($key, $data)
    {
        return view('prodigy::components.fields.dropdown', ['key' => $key, 'data' => $data]);
    }
}