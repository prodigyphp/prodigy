<?php

namespace ProdigyPHP\Prodigy\Actions;

use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Link;

class DuplicateLinkAction {

    protected Link $link;

    public function __construct(int $link_id)
    {
        $this->link = Link::findOrFail($link_id);
    }

    public function execute(): void
    {
        $new_block = $this->handleDeepDuplication($this->link->block);
        $new_link = $this->link->replicate();

        $new_link->block_id = $new_block->id;
        $new_link->save();

        // @TODO handle reordering

    }

    protected function handleDeepDuplication(Block $block): Block
    {
        // global blocks don't get replicated.
        if ($block->is_global) {
            return $block;
        }

        // loading children replicates them as well, I think.
        $block->load('children');
        $new_block = $block->replicate();

        $new_block->setCreatedAt(now());
        $new_block->save();

        return $new_block;

    }

}