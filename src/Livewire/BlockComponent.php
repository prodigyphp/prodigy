<?php

namespace ProdigyPHP\Prodigy\Livewire;

use Livewire\Component;
use ProdigyPHP\Prodigy\Models\Block;

class BlockComponent extends Component
{
    // You can send either the ID or the title of the block.
    public ?int $block_id = null;

    public ?string $block_title = null;

    public ?Block $block;

    public function mount(int $block_id = null, string $block_title = null)
    {
        if ($block_id) {
            $this->block_id = $block_id;
        } elseif ($block_title) {
            $this->block_title = $block_title;
        }
    }

    public function render()
    {
        // Get the block either with the ID or the title.
        $query = Block::query();
        $query->when($this->block_id, fn ($q) => $q->where('id', $this->block_id));
        $query->when($this->block_title, fn ($q) => $q->where('global_title', $this->block_title));
        $this->block = $query->with('children')->first();

        return view('prodigy::livewire.block-component');
    }
}
