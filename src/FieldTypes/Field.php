<?php

namespace ProdigyPHP\Prodigy\FieldTypes;

use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Entry;

abstract class Field {

    /**
     * The displayed name of the field.
     *
     * @var string
     */
    public $name;

    public array $subfields = [];

    public function make(string $key, array $meta, Block|Entry|null $block)
    {
        return;
    }

}