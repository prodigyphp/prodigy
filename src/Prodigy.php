<?php

namespace ProdigyPHP\Prodigy;

class Prodigy
{

    public static function path()
    {
        return config('prodigy.path', '/prodigy');
    }
}
