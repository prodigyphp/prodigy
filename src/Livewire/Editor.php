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
    public ?Page $editing_page;

    public string $editorState = 'blocksList'; // blocksList, pagesList, blockEditor, pageEditor

    protected $listeners = ['editBlock', 'duplicateBlock', 'deleteBlock', 'updateState', 'createPage', 'editPage', 'addChildBlockThenEdit'];

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

    public function addChildBlockThenEdit($key, $parent_block_id) : void
    {
        $block = Block::find($parent_block_id);
        $child_block = $block->repeaterChildren()->create([
            'key' => $key
        ]);

        $this->editBlock($child_block->id);
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
        $block = Block::find($id);

        $block->pages()->detach();

        // detach from the page
        //
        // update the order on the page to reflect the missing block.

        $block->rows()->
        $this->page->blocks()->detach($id);
        $this->emit('$refresh');
    }

    public function updateState(string $stateString)
    {
        $this->emit('fireGlobalRefresh');
        $this->editorState = $stateString;
    }

    public function createPage()
    {
        $this->editing_page = null;
        $this->updateState('pageEditor');
    }

    public function editPage(int $page_id)
    {
        $page = Page::findOrfail($page_id);

        // @TODO
        // $this->authorize('access_prodigy');

        $this->editing_page = $page;
        $this->updateState('pageEditor');
    }

}
