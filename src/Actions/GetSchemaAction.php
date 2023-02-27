<?php

namespace ProdigyPHP\Prodigy\Actions;

use Illuminate\Support\Str;
use ProdigyPHP\Prodigy\BlockGroups\BlockGroup;
use ProdigyPHP\Prodigy\Models\Block;
use Symfony\Component\Yaml\Yaml;
use Illuminate\Support\Facades\File;

class GetSchemaAction {


    public function execute(Block $block): array|null
    {
        $path = $this->getPathOfBlockSchema($block);

        return $this->getSchemaFromFile($path);

    }

    public static function standardSchema(): array
    {
        $path = base_path('vendor/prodigyphp/prodigy/resources/views/partials/standard-schema.yml');
        return Yaml::parseFile($path);
    }

    protected function getSchemaFromFile($path): array|null
    {
        if (File::isFile($path)) {
            return Yaml::parseFile($path);
        }

        // try .yaml as well
        $path = Str::of($path)->replaceLast('yml', 'yaml');
        if (File::isFile($path)) {
            return Yaml::parseFile($path);
        }
        return null;
    }

    protected function getPathOfBlockSchema(Block $block): string
    {
        $key = Str::of($block->key);
        $search_key = $key->replace('.', '/');

        // It's a package block, so we need to get the right namespace from the declaration.
        if ($key->contains("::")) {
            $namespace = $key->before("::");
            $blockGroup = collect(config('prodigy.block_paths'))
                ->map(fn(string $blockGroup) => (new $blockGroup))
                ->filter(fn(BlockGroup $blockGroup) => $blockGroup->namespace == $namespace)
                ->firstOrFail();
            $search_key = $search_key->remove("{$namespace}::blocks");
            return base_path("{$blockGroup->path}{$search_key}.yml");
        }

        // It's a regular local path, so we can just use the key.
        return resource_path("views/components/{$search_key}.yml");
    }

}