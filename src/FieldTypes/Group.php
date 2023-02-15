<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

class Group extends Field {


    public function make($key, $data)
    {
        return view('prodigy::components.fields.group', ['key' => $key, 'data' => $data]);
    }
}