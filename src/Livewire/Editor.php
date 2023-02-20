<?php

namespace ProdigyPHP\Prodigy\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;
use ProdigyPHP\Prodigy\BlockGroups\BlockGroup;
use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Page;

class Editor extends Component {

    public Page $page;

    public Collection $blocks;
    public Collection $groups;

    public ?Block $editing_block;

    public string $editorState = 'blocksList'; // blocksList, pagesList, or blockEditor

    protected $listeners = ['editBlock', 'duplicateBlock', 'deleteBlock', 'updateState'];

    public function mount(Page $page)
    {
        $this->page = $page;
    }

    public function render()
    {
        return view('prodigy::livewire.editor');
    }

    public function editBlock($id)
    {
        $this->editing_block = null; // clear anything else out first.
        $this->editing_block = Block::find($id);
        $this->editorState = 'blockEditor';
    }

    public function insertBlock($blockKey)
    {
        $block = Block::where('key', $blockKey)->get()->first();
        $this->page->blocks()->attach($block->id);
    }

    public function duplicateBlock($id)
    {
        $block = Block::find($id);
        $this->page->blocks()->attach($id);
    }

    public function deleteBlock($id)
    {
        $this->page->blocks()->detach($id);
        $this->emit('$refresh');
    }

    public function updateState(string $stateString)
    {
        $this->editorState = $stateString;
    }

}
