<?php

namespace ProdigyPHP\Prodigy\Livewire;

use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;
use ProdigyPHP\Prodigy\Actions\GetSchemaAction;
use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Link;

class EditBlock extends Component {

    use WithFileUploads;

    public Link $link;
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

        return $rules;

    }

    public function mount(Block $block, GetSchemaAction $schemaBuilder)
    {
//        $this->link = $link;
        $this->block = $block;

        // get registered fields list.
        $this->fields = config('prodigy.fields');

        $this->getSchema($schemaBuilder);
    }

    public function updating()
    {
        $this->emit('fireGlobalRefresh');
    }

    public function getSchema(GetSchemaAction $schemaBuilder): void
    {
        // Build the schema for a repeater block
        if ($this->block->key == 'repeater') {
            $parent = $this->block->parentBlock();
            $this->schema = $schemaBuilder->getRepeaterSchema($parent);
            return;
        }

        $this->schema = $schemaBuilder->execute($this->block) ?? []; // if content field is empty (as opposed to []), it'll error.
        $this->schema = array_merge_recursive($this->schema, $schemaBuilder->standardSchema()); // add all the normal fields.
    }


    /**
     * Gets the field, loads the view, and sends to the browser.
     * Note: this literally returns a view, which is unusual.
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

        // If there's no block collection yet, add an empty one.
        if (!$this->block->content) {
            $this->block->content = collect();
        }

        // Set default values if we have a default value but no set value.
        if (!$this->block->content->contains($key) &&
            array_key_exists('default', $data)) {

            // has to drop out to array b/c I can't update the collection directly.
            $content_array = $this->block->content->toArray();
            $content_array[$key] = $content_array[$key] ?? $data['default'];
            $this->block->content = collect($content_array);
        }

        // Side load the block ID to be able to upload images.
        if ($data['type'] == 'image') {
            $data['block_id'] = $this->block->id;
        }

        return (new $field_name)->make($key, $data, $this->block);

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
            if ($this->block->content?->has($key)) {
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
        $this->block->content = $this->block->content->filter(fn($val) => $val != null); // removes null values so we don't fill the db with null.

        $this->block->save();
        $this->close();
    }

    public function close(): void
    {

        // If it's inside a repeater, go back to editing the repeater block.
        if ($this->block->key == 'repeater') {
            $parent_id = $this->block->parentBlock()->id;
            $this->emit('editBlock', $parent_id);
            return;
        }

        // Otherwise go back to the blocks list.
        $this->emit('updateState', 'blocksList');
    }

    public function render()
    {
        return view('prodigy::livewire.edit-block');
    }

}
