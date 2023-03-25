<?php

namespace ProdigyPHP\Prodigy\Livewire;

use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;
use ProdigyPHP\Prodigy\Actions\GetEditorFieldAction;
use ProdigyPHP\Prodigy\Actions\GetSchemaAction;
use ProdigyPHP\Prodigy\Actions\GetSchemaRulesAction;
use ProdigyPHP\Prodigy\Actions\ReorderBlocksAction;
use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Link;

class EditBlock extends Component
{
    use WithFileUploads;

    public Link $link;

    public ?Block $block = null;

    public $schema;

    public array $fields;

    protected GetEditorFieldAction $fieldBuilder;

    protected function rules()
    {
        return [
            'block.is_global' => 'nullable',
            'block.global_title' => ($this->block->is_global) ? 'required' : 'nullable',
            ...(new GetSchemaRulesAction($this->schema, $this->fields, 'block'))->execute(),
        ];
    }

    public function mount(int $block_id, GetSchemaAction $schemaBuilder)
    {
        Gate::authorize('viewProdigy', auth()->user());

        $this->block = Block::find($block_id);

        // get registered fields list.
        $this->fields = config('prodigy.fields');

        // Get the editor field builder

        if ($this->block) {
            $this->getSchema($schemaBuilder);
        }
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

    public function reorder(int $block_id, int $newOrder)
    {
        Gate::authorize('viewProdigy', auth()->user());

        $block = Block::find($block_id);
        (new ReorderBlocksAction($block))->execute($newOrder);

        $this->emit('fireGlobalRefresh');
    }

    /**
     * Gets the field, loads the view, and sends to the browser.
     * Note: this literally returns a view, which is unusual.
     */
    public function getField($key, array $data): View|null
    {
        return (new GetEditorFieldAction($this->block))->execute($key, $data);
    }

    public function save()
    {
        Gate::authorize('viewProdigy', auth()->user());
        $this->validate();
        $this->block->content = $this->block->content->filter(fn ($val) => $val != null); // removes null values so we don't fill the db with null.

        $this->block->save();
        $this->close();
    }

    public function close(): void
    {
        // If it's inside a repeater, go back to editing the repeater block.
        if (isset($this->block) && $this->block->key == 'repeater') {
            $parent_id = $this->block->parentBlock()->id;
            $this->emit('editBlock', $parent_id);

            return;
        }

        // Otherwise go back to the blocks list.
        $this->emit('updateState', 'blocksList');
    }

    /**
     * Change the block to global to allow for headers and footers.
     */
    public function toggleGlobalBlock(bool $newValue): void
    {
        // Toggle the global flag.
        $this->block->is_global = $newValue;

        // Set a title if we need to.
        if ($newValue && ! $this->block->global_title) {
            $this->block->global_title = $this->block->title;
        }

        $this->block->save();
    }

    public function render()
    {
        return view('prodigy::livewire.edit-block');
    }
}
