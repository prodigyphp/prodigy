<?php

namespace ProdigyPHP\Prodigy;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Component;
use ProdigyPHP\Prodigy\BlockGroups\BlockGroup;
use ProdigyPHP\Prodigy\FieldTypes\Field;
use ProdigyPHP\Prodigy\Models\Block;
use Symfony\Component\Yaml\Yaml;

class EditBlock extends Component {

    public Block $block;

    public $schema;

    public array $fields;


    protected function rules()
    {
        if (!$this->schema) {
            return [];
        }

        $rules = [];
        foreach ($this->schema['fields'] as $attribute => $element) {
            $rules["block.content.{$attribute}"] = $element['rules'] ?? '';

        }

        return $rules;

    }

    public function mount(Block $block)
    {
        $this->block = $block;
        $this->fields = config('prodigy.fields');
        $this->schema = $this->getSchema($block) ?? []; // if content field is empty (as opposed to []), it'll error.
    }


    public function getSchema(Block $block): array|null
    {
        $path = $this->getPathOfBlockSchema($block);


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

    //
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

    /**
     * @param $key
     * @param $meta
     * @return View
     *
     * Gets the field, loads the view, and sends to the browser.
     */
    public function getField($key, $meta): View
    {
        $field = $this->fields[$meta['type']];
        return (new $field)->make($key, $meta);
    }

    public function save()
    {
        $this->validate();

        $this->block->save();
        $this->close();
    }

    public function close()
    {
        $this->emit('editBlock', null); // passing null kills the edit.
    }

    public function render()
    {
        return view('prodigy::edit-block');
    }

}
