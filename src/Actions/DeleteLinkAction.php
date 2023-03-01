<?php

namespace ProdigyPHP\Prodigy\Actions;

use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\BlockPage;
use ProdigyPHP\Prodigy\Models\BlockRow;
use ProdigyPHP\Prodigy\Models\Link;
use ProdigyPHP\Prodigy\Models\Page;

class DeleteLinkAction {

    protected Link $link;

    public function __construct(int $link_id)
    {
        info('before link find');
        info($link_id);
        $this->link = Link::findOrFail($link_id);
        info('past link find');
    }

    public function execute(): void
    {

        $block = $this->link->block;

        // We separately manage deleting global blocks.
        if (!$block->is_global) {
            // Delete non-global child blocks.
            $children = $block->children;
            $children->map(function ($child) {
                if (!$child->is_global) {
                    $child->delete();
                }
            });

            // Delete block itself.
            $block->delete();
        }

        // Remove the connection.
        $this->link->delete();

    }

}