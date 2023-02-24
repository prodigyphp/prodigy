<?php

namespace ProdigyPHP\Prodigy\Actions;

use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Page;

class AddBlockAction {

    protected string $block_key;
    protected Page $page;
    protected ?int $block_order;
    protected ?int $column_index;
    protected ?int $column_order;

    public function __construct(string $block_key)
    {
        $this->block_key = $block_key;
    }

    public function execute(): Block
    {
        if (!$this->column_index) {
            return $this->insertAtRowLevel();
        } else {
            return $this->insertIntoColumn();
        }
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

    protected function insertAtRowLevel(): Block
    {
        $blocks = $this->page->blocks;

        // We count starting at one, but PHP arrays start at zero, so we have to manually adjust.
        $zero_based_order = $this->block_order - 1;

        $new_block = $this->createBlock();

        // splice in the block to the collection.
        $blocks->splice($zero_based_order, 0, [$new_block]);

        $new_blocks = [];
        $order = 1;

        // Reorder the blocks
        foreach($blocks as $newly_ordered_block) {
            $new_blocks[$newly_ordered_block->id] = [
                'order' => $order,
            ];
            $order++;
        }

        // Detach old
        $this->page->blocks()->detach($blocks->pluck('id'));

        // Create all new attachments
        $this->page->blocks()->attach($new_blocks);

        // Send back the block we created.
        return $new_block;
    }

    protected function insertIntoColumn(): Block
    {
        // find the block
        $block = $this->page->blocks()->wherePivot('order', $this->block_order)->first();

        // get all the blocks in the column
        $child_blocks = $block->children()->wherePivot('column', $this->column_index)->get();

        // We count starting at one, but PHP arrays start at zero, so we have to manually adjust.
        $zero_based_order = $this->column_order - 1;

        // create block
        $child_block = $this->createBlock();

        // splice in the block to the collection.
        $child_blocks->splice($zero_based_order, 0, [$child_block]);

        $new_column_blocks = [];
        $order = 1;

        // Reorder the blocks
        foreach($child_blocks as $newly_ordered_block) {
            $new_column_blocks[$newly_ordered_block->id] = [
                'order' => $order,
                'column' => $this->column_index
            ];
            $order++;
        }

        // Detach old
        $block->children()->detach($child_blocks->pluck('id'));

        // Create all new attachments
        $block->children()->attach($new_column_blocks);

        // Send back the block we created.
        return $child_block;
    }

    protected function createBlock(): Block
    {
        return Block::create([
            'key' => $this->block_key
        ]);
    }

}