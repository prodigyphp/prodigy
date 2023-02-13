<?php

namespace ProdigyPHP\Prodigy;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Livewire\Component;
use ProdigyPHP\Prodigy\BlockGroups\BlockGroup;
use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Page;

class Editor extends Component {

    public Page $page;

    public Collection $blocks;
    public Collection $groups;

    public ?Block $editing_block;

    protected $listeners = ['editBlock', 'duplicateBlock', 'deleteBlock'];

    public function mount(Page $page)
    {
        $this->page = $page;
    }

    public function render()
    {
        $this->groups = $this->getBlocks();
        return view('prodigy::editor');
    }

    public function editBlock($id)
    {
        $this->editing_block = null; // clear anything else out first.
        $this->editing_block = Block::find($id);
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

    public function getBlocks()
    {
        return collect(config('prodigy.block_paths'))
            ->map(fn(string $blockGroup) => (new $blockGroup))
            ->map(function (BlockGroup $blockGroup) {
                return [
                    'title' => $blockGroup->title,
                    'folders' => $blockGroup->getFolders()
                ];
            });

    }

}
