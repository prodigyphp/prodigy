<?php

namespace ProdigyPHP\Prodigy;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Livewire\Component;
use ProdigyPHP\Prodigy\Models\Block;

class EditBlock extends Component {

    public Block $block;

    public $schema;


    protected function rules()
    {
        if(!$this->schema) { return [];}

        $rules = [];
        foreach ($this->schema['fields'] as $attribute => $element) {
            $rules["block.content.{$attribute}"]= $element['rules'];
        }

        return $rules;

    }

    public function mount(Block $block)
    {
        $this->block = $block;
        $this->schema = $this->getSchema($block);

        $this->ensureBlockHasAContentField();
    }

    /**
     * @return void
     * If the content field is empty (as opposed to []), it'll throw an error.
     */
    public function ensureBlockHasAContentField() {
        if(!$this->block->content) {
            $this->block->content = [];
        }
    }

    public function getSchema(Block $block): array|null
    {
        $search_key = Str::of($block->key)->replace('.', '/'); // converts block.header to block/header.
        $path = resource_path("views/components/{$search_key}.json");

        if (File::isFile($path)) {
            $file_string = file_get_contents($path);
            return json_decode($file_string, true);
        }

        return null;
    }

    public function save()
    {
        $this->validate();

        $this->block->save();
        $this->close();
    }

    public function close()
    {
        $this->emit('editingBlock', null); // passing null kills the edit.
    }

    public function render()
    {
        return view('prodigy::edit-block');
    }

}
