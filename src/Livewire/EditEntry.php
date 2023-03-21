<?php

namespace ProdigyPHP\Prodigy\Livewire;

use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Livewire\WithFileUploads;
use ProdigyPHP\Prodigy\Actions\GetSchemaAction;
use ProdigyPHP\Prodigy\Models\Entry;
use ProdigyPHP\Prodigy\Traits\LoadsFieldFormElements;

class EditEntry extends Component {

    use WithFileUploads;
    use LoadsFieldFormElements;

    /**
     * -- Why this is called Block --
     * We call the page a "block" because every field has `block.content` hardcoded
     * as a reference to Livewire, which expects a variable on the class called
     * `block`. The other option is to pass down the words `block`, `entry` and
     * `page` to each field.
     */
    public $model = 'block';
    public Entry $block;
    public $schema;
    public array $fields;

    public string $editor_title;

    protected function rules()
    {
        if (!$this->schema) {
            return [];
        }
        return $this->iterateSchemaToBuildRules();
    }

    public function mount(int $entry_id, GetSchemaAction $schemaBuilder)
    {
        Gate::authorize('viewProdigy', auth()->user());
        $this->block = Entry::find($entry_id);

        // get registered fields list.
        $this->fields = config('prodigy.fields');

        $this->schema = $schemaBuilder->getEntrySchema($this->block->type) ?? []; // if content field is empty (as opposed to []), it'll error.
    }

    public function save()
    {
        $this->validate();
        $this->block->content = $this->block->content->filter(); // removes null values so we don't fill the db with null.

        if($this->needsOrder()) {
            $this->setOrder();
        }

        $this->block->save();
        $this->close();
    }

    public function needsOrder() : bool
    {
        return !$this->block->order &&
                array_key_exists('orderBy', $this->schema) &&
                $this->schema['orderBy'] == 'order';
    }

    public function setOrder() {
        $highest_entry = Entry::ofType($this->schema['type'])->orderBy('order', 'desc')->select('order')->first() ?? 0;
        $this->block->order = $highest_entry->order +1;
    }

    public function close(): void
    {
        // go back to the entries list.
        $this->emit('updateState', 'entriesList', null, $this->block->type);
    }

    public function render()
    {
        return view('prodigy::livewire.edit-entry');
    }

}
