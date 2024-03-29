<?php

namespace ProdigyPHP\Prodigy\Traits;

use Illuminate\View\View;

trait LoadsFieldFormElements
{
    /**
     * Gets the field, loads the view, and sends to the browser.
     * Note: this literally returns a view, which is unusual.
     */
    public function getField($key, array $data): View|null
    {
        $model = $this->model;
        $field_name = $this->fields[$data['type']] ?? null;

        if (! $field_name) {
            return null;
        }

        // Check the conditionals to decide if we should render the field at all.
        // We need a "show" key to test against.
        if (array_key_exists('show', $data)) {
            if (! $this->testConditionalLogic($data['show'])) {
                return null;
            }
        }

        // If there's no block/entry collection yet, add an empty one.
        if (! $this->$model->content) {
            $this->$model->content = collect();
        }

        // Set default values if we have a default value but no set value.
        if (! $this->$model->content->contains($key) &&
            array_key_exists('default', $data)) {
            // has to drop out to array b/c I can't update the collection directly.
            $content_array = $this->$model->content->toArray();
            $content_array[$key] = $content_array[$key] ?? $data['default'];
            $this->$model->content = collect($content_array);
        }

        return (new $field_name)->make($key, $data, $this->$model);
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
        $model = $this->model;
        // Convert a string into an array, delimited by |
        if (is_string($rules)) {
            $rules = explode('|', $rules);
        }

        // Iterate over each rule
        foreach ($rules as $rule) {
            $key = str($rule)->before(':')->toString(); // key is before the :
            $rule_value = str($rule)->after(':')->toString(); // value is after the :

//                info([$key, $value, $this->block->content->contains($key, $value), $this->block->content]);
            // If we can find the key and value, it passes
            if ($this->$model->content?->has($key)) {
                $current_value = $this->$model->content[$key];
                if ($current_value == $rule_value) {
                    return true;
                }
            }
        }

        // Otherwise, it fails.
        return false;
    }

    public function iterateSchemaToBuildRules(): array
    {
        $model = $this->model;
        $rules = [];
        foreach ($this->schema['fields'] as $attribute => $element) {
            // check for subfields at the top level
            if ($subfields = $this->getSubFields($element['type'])) {
                foreach ($subfields as $subfield => $subfield_rules_string) {
                    $rules["{$model}.content.{$attribute}_{$subfield}"] = $subfield_rules_string;
                }
            } else {
                $rules["{$model}.content.{$attribute}"] = $element['rules'] ?? '';
            }

            // iterate over fields in groups as well.
            if ($element['type'] == 'group') {
                foreach ($element['fields'] as $field_key => $field_element) {
                    // check for subfields at the group level
                    if ($subfields = $this->getSubFields($field_element['type'])) {
                        foreach ($subfields as $subfield => $subfield_rules_string) {
                            $rules["{$model}.content.{$field_key}_{$subfield}"] = $subfield_rules_string;
                        }
                    } else {
                        $rules["{$model}.content.{$field_key}"] = $field_element['rules'] ?? '';
                    }
                }
            }
        }

        return $rules;
    }
}
