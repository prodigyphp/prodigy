<?php

namespace ProdigyPHP\Prodigy\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ProdigyPHP\Prodigy\Prodigy
 */
class Prodigy extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ProdigyPHP\Prodigy\Prodigy::class;
    }
}
