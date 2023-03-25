<?php

namespace ProdigyPHP\Prodigy\Actions;

use Illuminate\View\View;
use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Entry;
use ProdigyPHP\Prodigy\Models\Page;

class GetEditorFieldAction
{
    protected Block|Page|Entry $model;

    protected array $fields;

    public function __construct(Block|Page|Entry $model)
    {
        $this->model = $model;
        $this->fields = config('prodigy.fields');
    }

    public function execute($key, array $data): View|null
    {
        $field_name = $this->fields[$data['type']] ?? null;

        if (! $field_name) {
            return null;
        }

        // Check the conditionals to decide if we should render the field at all.
        // We need a "show" key to test against.
        if (array_key_exists('show', $data)) {
            if (! $this->testConditionalLogic($data['show'])) {
                info($field_name);

                return null;
            }
        }

        // If there's no model collection yet, add an empty one.
        if (! $this->model->content) {
            $this->model->content = collect();
        }

        // Set default values if we have a default value but no set value.
        if (! $this->model->content->contains($key) &&
            array_key_exists('default', $data)) {
            // has to drop out to array b/c I can't update the collection directly.
            $content_array = $this->model->content->toArray();
            $content_array[$key] = $content_array[$key] ?? $data['default'];
            $this->model->content = collect($content_array);
        }

        return (new $field_name)->make($key, $data, $this->model);
    }

    public function testConditionalLogic(string|array $rules): bool
    {
        // Convert a string into an array, delimited by |
        if (is_string($rules)) {
            $rules = explode('|', $rules);
        }

        // Iterate over each rule
        foreach ($rules as $rule) {
            $result = $this->test_condition($rule);
            if ($result) {
                return true;
            } // we only return true, not false, since we may have multiple conditions.
        }

        // Otherwise, it fails.
        return false;
    }

    protected function test_condition($rule): bool
    {
        // 'column:gte:3' becomes 'column'
        $key = str($rule)->before(':')->toString();

        // 'column:gte:3' becomes '3'
        $rule_value = str($rule)->afterLast(':')->toString();

        // safety check.
        if (! $this->model->content?->has($key)) {
            return false;
        }

        // get the current value from the other field.
        $current_value = $this->model->content[$key];

        return match (true) {
            str($rule)->contains(':gt:') => ((int) $current_value > (int) $rule_value),
            str($rule)->contains(':gte:') => ((int) $current_value >= (int) $rule_value),
            str($rule)->contains(':lt:') => ((int) $current_value < (int) $rule_value),
            str($rule)->contains(':lte:') => ((int) $current_value <= (int) $rule_value),
            default => ($current_value == $rule_value)
        };
    }

    // This is old code that no longer is needed.
    // It's just here for reference since I refactored.
//    protected function show_if_another_field_equals($rule): bool
//    {
//        $key = str($rule)->before(':')->toString(); // key is before the :
//        $rule_value = str($rule)->after(':')->toString(); // value is after the :
//
//        // If we can find the key and value, it passes
//        if ($this->model->content?->has($key)) {
//            $current_value = $this->model->content[$key];
//            if ($current_value == $rule_value) {
//                return true;
//            }
//        }
//        return false;
//    }
}
