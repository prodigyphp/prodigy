<?php

namespace ProdigyPHP\Prodigy\Actions;

use Illuminate\Database\Eloquent\Collection;
use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Entry;

class ReorderBlocksAction
{
    protected Collection $blocks;

    protected Block $block_to_reorder;

    protected Block|Entry $parent_block;

    public function __construct(Block $block_to_reorder)
    {
        $this->block_to_reorder = $block_to_reorder;
        $this->parent_block = $this->block_to_reorder->parent;
        $this->blocks = $this->parent_block->children()->get();
    }

    public function execute(int $new_order)
    {
        // remove all children.
        $this->parent_block->children()->detach();

        // Remove the existing block from the list.
        $blocks = $this->blocks->filter(function ($e) {
            return $e->id != $this->block_to_reorder->id;
        });

        // We count starting at one, but PHP arrays start at zero, so we have to manually adjust.
        $zero_based_order = $new_order;

        // splice in the block to the collection.
        $blocks->splice($zero_based_order, 0, [$this->block_to_reorder]);

        // Reorder the blocks
        $order = 1;
        foreach ($blocks as $newly_ordered_block) {
            $this->parent_block->children()->attach($newly_ordered_block->id, ['order' => $order]);
            $order++;
        }
    }
}
