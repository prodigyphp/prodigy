<?php

namespace ProdigyPHP\Prodigy;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use ProdigyPHP\Prodigy\Actions\GetSchemaAction;

class Prodigy {

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

    /**
     * This is a quirk of Laravel's component system. Local components remove the 'components.'
     * part of the component name. So something in /components/blocks/header.blade.php would
     * be used as <x-blocks.header>. But packages handle this a little differently. They need
     * to test prodigy::components.blocks.basic.row for <x-prodigy::blocks.basic.row>
     * So we manually add the `::components` bit.
     */
    public function canFindView(string $key): bool
    {
        $mutated_key = Str::of($key);

        // It's a package component
        if ($mutated_key->contains('::')) {
            $mutated_key = $mutated_key->replace('::', '::components.')->toString();
            return View::exists($mutated_key);
        }

        // It's a local component, just return the key.
        return View::exists("components.{$key}");
    }

}
