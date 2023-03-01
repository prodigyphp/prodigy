<?php

namespace ProdigyPHP\Prodigy\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use ProdigyPHP\Prodigy\Actions\GetSchemaAction;
use ProdigyPHP\Prodigy\Models\Entry;
use ProdigyPHP\Prodigy\Traits\LoadsFieldFormElements;

class EditEntry extends Component {

    use WithFileUploads;
    use LoadsFieldFormElements;

    protected string $model = 'block';
    public Entry $block;
    public $schema;
    public array $fields;

    // @TODO RULES
    protected function rules()
    {
        if (!$this->schema) {
            return [];
        }
        return $this->iterateSchemaToBuildRules();
    }

    public function mount(Entry $entry, GetSchemaAction $schemaBuilder)
    {
        $this->block = $entry;

        // get registered fields list.
        $this->fields = config('prodigy.fields');

        $this->schema = $schemaBuilder->getEntrySchema($this->block->type) ?? []; // if content field is empty (as opposed to []), it'll error.
    }

    public function save()
    {
        $this->validate();
        $this->block->content = $this->block->content->filter(); // removes null values so we don't fill the db with null.

        $this->block->save();
        $this->close();
    }

    public function close(): void
    {
        // go back to the entries list.
        $this->emit('updateState', 'entriesList');
    }

    public function render()
    {
        return view('prodigy::livewire.edit-entry');
    }

}
