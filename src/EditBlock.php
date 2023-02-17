<?php

namespace ProdigyPHP\Prodigy;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;
use ProdigyPHP\Prodigy\BlockGroups\BlockGroup;
use ProdigyPHP\Prodigy\Models\Block;
use Symfony\Component\Yaml\Yaml;

class EditBlock extends Component {

    use WithFileUploads;

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

            // check for subfields at the top level
            if ($subfields = $this->getSubFields($element['type'])) {
                foreach ($subfields as $subfield => $subfield_rules_string) {
                    $rules["block.content.{$attribute}_{$subfield}"] = $subfield_rules_string;
                }
            } else {
                $rules["block.content.{$attribute}"] = $element['rules'] ?? '';
            }

            // iterate over fields in groups as well.
            if ($element['type'] == 'group') {
                foreach ($element['fields'] as $field_key => $field_element) {


                    // check for subfields at the group level
                    if ($subfields = $this->getSubFields($field_element['type'])) {
                        foreach ($subfields as $subfield => $subfield_rules_string) {
                            $rules["block.content.{$field_key}_{$subfield}"] = $subfield_rules_string;
                        }
                    } else {
                        $rules["block.content.{$field_key}"] = $field_element['rules'] ?? '';
                    }
                }

            }

        }

//        info($rules);
        return $rules;

    }

    /**
     * Each field class has a property "subfields" which can be set to an array.
     * That array contains [key => rules] where rules are Laravel validation
     * rules and key is the name of the subfield. This is used for when a field
     * needs to handle logic for displaying  multidimensional fields.
     */
    public function getSubFields(string $field_slug): array
    {
        return (new $this->fields[$field_slug])->subfields;
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
     * Gets the field, loads the view, and sends to the browser.
     */
    public function getField($key, array $data): View|null
    {
        $field_name = $this->fields[$data['type']] ?? null;

        if (!$field_name) {
            return null;
        }

        // Check the conditionals to decide if we should render the field at all.
        // We need a "show" key to test against.
        if (array_key_exists('show', $data)) {
            if (!$this->testConditionalLogic($data['show'])) {
                return null;
            }
        }

        // Side load the block ID to be able to upload images.
        if ($data['type'] == 'image') {
            $data['block_id'] = $this->block->id;
        }

        return (new $field_name)->make($key, $data, $this->block);

    }

    public function testConditionalLogic(string|array $rules): bool
    {
        // Convert a string into an array, delimited by |
        if (is_string($rules)) {
            $rules = explode('|', $rules);
        }

        $metaCollection = collect($this->block->content);

        // Iterate over each rule
        foreach ($rules as $rule) {
            $key = str($rule)->before(':')->toString(); // key is before the :
            $rule_value = str($rule)->after(':')->toString(); // value is after the :

//                info([$key, $value, $this->block->content->contains($key, $value), $this->block->content]);
            // If we can find the key and value, it passes
            if ($this->block->content->has($key)) {
                $current_value = $this->block->content[$key];
                if ($current_value == $rule_value) {
                    return true;
                }
            }
        }

        // Otherwise, it fails.
        return false;
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
