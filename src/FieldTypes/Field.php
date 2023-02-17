<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

use ProdigyPHP\Prodigy\Models\Block;

abstract class Field {

    /**
     * The displayed name of the field.
     *
     * @var string
     */
    public $name;

    public array $subfields = [];

    public function make(string $key, array $meta, Block|null $block)
    {
        return;
    }

}