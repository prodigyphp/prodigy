<?php

namespace ProdigyPHP\Prodigy\Actions;

use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Link;

class DeleteLinkAction {


    public function __construct(protected Link $link) {}

    public function execute(): void
    {
        $this->removeBlocks()
            ->deleteLink();
    }

    /* We separately manage deleting global blocks.
     * and block deletion cascades
     */
    public function removeBlocks(): self
    {
        $block = $this->link->block;

        if (!$block->is_global) {
            $block->delete();
        }
        return $this;
    }

    public function deleteLink()
    {
        $this->link->delete();
    }

}