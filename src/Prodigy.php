<?php

namespace ProdigyPHP\Prodigy;

use Illuminate\Support\Collection;
use ProdigyPHP\Prodigy\Actions\GetSchemaAction;

class Prodigy
{

    public static function path()
    {
        return config('prodigy.path', '/prodigy');
    }

    public static function getEntrySchemas(): Collection
    {
        return (new GetSchemaAction())->getEntrySchemas();
    }

    public static function getTaxonomySchemas(): Collection
    {
        return (new GetSchemaAction())->getTaxonomySchemas();
    }
}
