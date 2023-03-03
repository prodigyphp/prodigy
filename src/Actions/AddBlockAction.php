<?php

namespace ProdigyPHP\Prodigy\Actions;

use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Link;
use ProdigyPHP\Prodigy\Models\Page;

class AddBlockAction {

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

    public function insertExistingBlockByLinkId(int $link_id):self
    {
        $link = Link::find($link_id);
        $this->block = $link->child;

        // we're moving the block, so we need to delete the old link.
        $link->delete();
        return $this;
    }

    public function createBlockByKey(string $block_key):self
    {
        $this->block_key = $block_key;
        $this->block = $this->createBlock();
        return $this;
    }

    protected function insertAtRowLevel(): Block
    {
        $blocks = $this->page->blocks;

        // We count starting at one, but PHP arrays start at zero, so we have to manually adjust.
        $zero_based_order = $this->block_order - 1;

        // splice in the block to the collection.
        $blocks->splice($zero_based_order, 0, [$this->block]);

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

        // Send back the link we created.
        return $this->block;
//        return $this->findLink($new_block, $this->page);
    }

    protected function insertIntoColumn(): Block
    {

        // find the block
        $row = $this->page->blocks()->wherePivot('order', $this->block_order)->first();

        // get all the blocks in the column
        $child_blocks = $row->children()->wherePivot('column', $this->column_index)->get();

        // We count starting at one, but PHP arrays start at zero, so we have to manually adjust.
        $zero_based_order = $this->column_order - 1;

        // splice in the block to the collection.
        $child_blocks->splice($zero_based_order, 0, [$this->block]);

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
        $row->children()->detach($child_blocks->pluck('id'));

        // Create all new attachments
        $row->children()->attach($new_column_blocks);

        // Send back the link we created.
        return $this->block;
//        return $this->findLink($child_block, $row);
    }

    protected function createBlock(): Block
    {
        return Block::create([
            'key' => $this->block_key
        ]);
    }

}