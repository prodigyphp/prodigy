<?php

namespace ProdigyPHP\Prodigy\Actions;

use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Link;
use ProdigyPHP\Prodigy\Models\Page;

class AddBlockAction
{
    protected string $block_key;

    protected Block $block;

    protected Page $page;

    protected ?int $block_order;

    protected ?int $column_index;

    protected ?int $column_order;

    public function __construct()
    {
    }

    public function execute(): Block
    {
        return ($this->isMovingIntoARow()) ?
            $this->insertAtRowLevel() :
            $this->insertIntoColumn();
    }

    public function atPagePosition(int|null $block_order): self
    {
        $this->block_order = $block_order ?? 1; // default to 1. you can have empty rows.

        return $this;
    }

    public function forPage(Page $page): self
    {
        $this->page = $page;

        return $this;
    }

    public function intoColumn(int|null $column_index): self
    {
        $this->column_index = $column_index; // if this is empty, we assume it's a row-level entry.

        return $this;
    }

    public function atColumnPosition(int|null $column_order): self
    {
        $this->column_order = $column_order ?? 1; // default to 1.

        return $this;
    }

    public function insertExistingBlockByLinkId(int $link_id): self
    {
        $link = Link::find($link_id);
        $this->block = $link->child;

        // If we are reordering from higher to lower, we will be pulling an item out which
        // messes with the order. Here we account for the loss of that item on both row
        // and column.
        if ($this->isMovingIntoARow() && ($link->order < $this->block_order)) {
            $this->block_order = $this->block_order - 1;
        }
        if ($this->isMovingIntoAColumn() && ($link->order < $this->column_order)) {
            $this->column_order = $this->column_order - 1;
        }

        // we're moving the block, so we need to delete the old link.
        // But if we directly delete it, it will delete the block too.
        $link->parent->children()->detach($link->child->id);

        // We are "resetting" the state to get the right order before
        // re-adding the new block in the execute function.
        if ($this->isMovingIntoARow()) {
            $this->updateBlockOrder();
        } else {
            $this->updateBlockColumnOrder(false);
        }

        return $this;
    }

    public function attachGlobalBlock(int $block_id): self
    {
        $this->block = Block::find($block_id);

        return $this;
    }

    public function createBlockByKey(string $block_key): self
    {
        $this->block_key = $block_key;
        $this->block = $this->createBlock();

        return $this;
    }

    // If there is no column index, it's moving into a row.
    protected function isMovingIntoARow(): bool
    {
        return ! $this->isMovingIntoAColumn();
    }

    protected function isMovingIntoAColumn(): bool
    {
        return $this->column_index ?? false;
    }

    protected function insertAtRowLevel(): Block
    {
        $this->updateBlockOrder($this->block);

        // Send back the block we created.
        return $this->block;
    }

    protected function insertIntoColumn(): Block
    {
        $this->updateBlockColumnOrder(true);

        // Send back the link we created.
        return $this->block;
    }

    protected function updateBlockColumnOrder(bool $addBlock = false): self
    {
        // find the block
        $row = $this->page->blocks()->wherePivot('order', $this->block_order)->first();

        // early return if we can't find a row.
        if (! $row) {
            return $this;
        }

        // get all the blocks in the column
        $child_blocks = $row->children()->wherePivot('column', $this->column_index)->get();

        if ($addBlock) {
            // We count starting at one, but PHP arrays start at zero, so we have to manually adjust.
            $zero_based_order = $this->column_order - 1;

            // splice in the block to the collection.
            $child_blocks->splice($zero_based_order, 0, [$this->block]);
        }

        $new_column_blocks = [];
        $order = 1;

        // Reorder the blocks
        foreach ($child_blocks as $newly_ordered_block) {
            $new_column_blocks[$newly_ordered_block->id] = [
                'order' => $order,
                'column' => $this->column_index,
            ];
            $order++;
        }

        // Detach old
        $row->children()->detach($child_blocks->pluck('id'));

        // Create all new attachments
        $row->children()->attach($new_column_blocks);

        return $this;
    }

    protected function updateBlockOrder(?Block $newBlock = null): self
    {
        // it's important to re-pull the children in case there were order updates since
        // this class was loaded. (i.e. when reordering blocks.)
        $blocks = $this->page->children()->get();

        // Add in a block. Otherwise, just update the order.
        if ($newBlock) {
            // We count starting at one, but PHP arrays start at zero, so we have to manually adjust.
            $zero_based_order = $this->block_order - 1;

            // splice in the block to the collection.
            $blocks->splice($zero_based_order, 0, [$this->block]);
        }

        $new_blocks = [];
        $order = 1;

        /**
         * Reorder blocks
         *
         * @TODO: right now, this prevents global content from appearing on the same page twice.
         */
        foreach ($blocks as $newly_ordered_block) {
            $new_blocks[$newly_ordered_block->id] = [
                'order' => $order,
            ];
            $order++;
        }

        // Detach old
        $this->page->blocks()->detach($blocks->pluck('id'));

        // Create all new attachments
        $this->page->blocks()->attach($new_blocks);

        return $this;
    }

    protected function createBlock(): Block
    {
        return Block::create([
            'key' => $this->block_key,
        ]);
    }
}
