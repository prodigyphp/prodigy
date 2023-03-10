<?php

namespace ProdigyPHP\Prodigy\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;
use ProdigyPHP\Prodigy\BlockGroups\BlockGroup;
use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Page;

class BlocksList extends Component {

    public Page $page;

    public Collection $blocks;
    public Collection $groups;
    public Collection $global_blocks;

    public function mount(Page $page)
    {
        $this->page = $page;
    }

    public function render()
    {
        $this->groups = $this->getBlocks();
        $this->global_blocks = $this->getGlobalBlocks();
        return view('prodigy::livewire.blocks-list');
    }

    public function getGlobalBlocks(): Collection
    {
        return Block::where('is_global', true)->get();
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
