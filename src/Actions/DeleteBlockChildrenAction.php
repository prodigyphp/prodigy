<?php

namespace ProdigyPHP\Prodigy\Actions;

use ProdigyPHP\Prodigy\Models\Block;

class DeleteBlockChildrenAction {


    public function execute(Block $block): void
    {
        // We separately manage deleting global blocks.
        if ($block->is_global) {
            return;
        }

        $block->children->map(function ($child) use ($block) {

            $block->children()->detach($child->id);

            if ($child->is_global) {
                return;
            }

            $child->delete();
        });
    }

}