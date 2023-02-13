<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

abstract class Field {

    /**
     * The displayed name of the field.
     *
     * @var string
     */
    public $name;

    public function make(string $key, array $meta)
    {
        return void;
    }

}