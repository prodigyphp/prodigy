<?php

namespace ProdigyPHP\Prodigy\Actions;

class GetSchemaRulesAction
{
    public function __construct(
        protected $schema,
        protected array $fields,
        protected string $model_key = 'block')
    {
    }

    public function execute(): array
    {
        if (! $this->schema) {
            return [];
        }

        $rules = [];

        foreach ($this->schema['fields'] as $attribute => $element) {
            // check for subfields at the top level
            if ($subfields = $this->getSubFields($element['type'])) {
                foreach ($subfields as $subfield => $subfield_rules_string) {
                    $rules["{$this->model_key}.content.{$attribute}_{$subfield}"] = $subfield_rules_string;
                }
            } else {
                $rules["{$this->model_key}.content.{$attribute}"] = $element['rules'] ?? '';
            }

            // iterate over fields in groups as well.
            if ($element['type'] == 'group') {
                foreach ($element['fields'] as $field_key => $field_element) {
                    // check for subfields at the group level
                    if ($subfields = $this->getSubFields($field_element['type'])) {
                        foreach ($subfields as $subfield => $subfield_rules_string) {
                            $rules["{$this->model_key}.content.{$field_key}_{$subfield}"] = $subfield_rules_string;
                        }
                    } else {
                        $rules["{$this->model_key}.content.{$field_key}"] = $field_element['rules'] ?? '';
                    }
                }
            }
        }

        return $rules;
    }

    /**
     * Each field class has a property "subfields" which can be set to an array.
     * That array contains [key => rules] where rules are Laravel validation
     * rules and key is the name of the subfield. This is used for when a field
     * needs to handle logic for displaying  multidimensional fields.
     */
    protected function getSubFields(string $field_slug): array
    {
        return (new $this->fields[$field_slug])->subfields;
    }
}
