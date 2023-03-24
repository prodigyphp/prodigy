<?php

namespace ProdigyPHP\Prodigy\Actions;

use Illuminate\Support\Collection;
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

    /**
     * Repeater schemas are pulled from their parent block.
     */
    public function getRepeaterSchema(Block $parent_block): array
    {
        $parent_schema = $this->execute($parent_block);
        $fields = $parent_schema['fields']['repeater'];
        return $fields;
    }

    public function getEntrySchema(string $type): array
    {
        return $this->getEntrySchemas()->where('type', $type)->first();
//        $path = resource_path("schemas/{$type}.yml");
//        return $this->getSchemaFromFile($path);
    }

    public function getTaxonomySchemas(): Collection
    {
        return $this->getAllDataSchemas()->where('role', 'taxonomy');
    }

    public function getEntrySchemas(): Collection
    {
        return $this->getAllDataSchemas()->where('role', 'entry');
    }

    public function getAllDataSchemas(): Collection
    {
        $path = resource_path("schemas");

        $paths = $this->glob_recursive($path, '*.{yml,yaml}', GLOB_BRACE);

        return collect($paths)->map(fn($path) => $this->getSchemaFromFile($path));

    }

    public static function pageSchema(): array
    {
        $path = base_path('vendor/prodigyphp/prodigy/resources/views/partials/page-schema.yml');
//        $path = __DIR__ . '../../vendor/prodigyphp/prodigy/resources/views/partials/page-schema.yml';
        return Yaml::parseFile($path);
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

    protected function glob_recursive($base, $pattern, $flags = 0)
    {
        $flags = $flags & ~GLOB_NOCHECK;

        if (substr($base, - 1) !== DIRECTORY_SEPARATOR) {
            $base .= DIRECTORY_SEPARATOR;
        }

        $files = glob($base . $pattern, $flags);
        if (!is_array($files)) {
            $files = [];
        }

        $dirs = glob($base . '*', GLOB_ONLYDIR | GLOB_NOSORT | GLOB_MARK);
        if (!is_array($dirs)) {
            return $files;
        }

        foreach ($dirs as $dir) {
            $dirFiles = $this->glob_recursive($dir, $pattern, $flags);
            $files = array_merge($files, $dirFiles);
        }

        return $files;
    }

}