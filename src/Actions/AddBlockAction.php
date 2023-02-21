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
        dd(['row', $this->block_key, $this->block_order, $this->column_index]);
    }

    protected function insertIntoColumn(): Block
    {
        $block = $this->page->blocks()->wherePivot('order', $this->block_order)->first();
        $child_block = $this->createBlock();

        // @TODO
        // Figure out the logic for putting a child block into the right spot in the list.


        $block->children()->attach($child_block->id, ['order' => $this->column_order, 'column' => $this->column_index]);

        return $child_block;
    }

    protected function createBlock(): Block
    {
        return Block::create([
            'key' => $this->block_key
        ]);
    }

}