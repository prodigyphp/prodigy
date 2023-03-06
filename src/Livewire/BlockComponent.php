<?php

namespace ProdigyPHP\Prodigy\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;
use ProdigyPHP\Prodigy\BlockGroups\BlockGroup;
use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Page;

class BlockComponent extends Component {

    public int $block_id;
    public ?Block $block;

    public function mount(int $block_id)
    {
        $this->block_id = $block_id;
    }

    public function render()
    {
        $this->block = Block::where('id', $this->block_id)->with('children')->first();
        return view('prodigy::livewire.block-component');
    }

}
