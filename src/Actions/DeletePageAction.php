<?php

namespace ProdigyPHP\Prodigy\Actions;

use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\BlockPage;
use ProdigyPHP\Prodigy\Models\BlockRow;
use ProdigyPHP\Prodigy\Models\Link;
use ProdigyPHP\Prodigy\Models\Page;

class DeletePageAction {

    public function execute(Page $page): void
    {
        $blocks = $page->children()->with('children')->get();

        $blocks->map(function ($block) use($page) {
            $this->removeChildren($block);
            $this->removeBlockFromPage($block, $page);
            if (!$block->is_global) {
                $block->delete();
            }
        });
    }

    protected function removeChildren(Block $block): void
    {
        // Delete non-global child blocks.
        $block->children->map(function ($child) use ($block) {
            $block->children()->detach($child->id);
            if (!$child->is_global) {
                $child->delete();
            }
        });
    }

    protected function removeBlockFromPage($block, $page) :void
    {
        $page->children()->detach($block->id);
    }

}