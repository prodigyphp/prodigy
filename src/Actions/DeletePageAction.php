<?php

namespace ProdigyPHP\Prodigy\Actions;

use Illuminate\Database\Eloquent\Collection;
use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Page;

class DeletePageAction {

    protected $page;
    protected Collection $blocks;

    public function __construct(Page $page)
    {
        $this->page = $page;
        $this->blocks = $this->page->children()->with('children')->get();
    }

    public function execute(): void
    {
        $this->removeBlocks()
             ->deletePage();
    }

    public function removeBlocks(): self
    {
        $this->blocks->map(function ($block) {
            $this->removeChildren($block);
            $this->removeBlockFromPage($block, $this->page);
            if (!$block->is_global) {
                $block->delete();
            }
        });

        return $this;
    }

    public function deleteDraft(): self
    {
        if($draft = $this->page->draftPage) {
            (new DeletePageAction($draft))->execute();
        }
        return $this;
    }

    public function deletePage(): self
    {
        $this->page->delete();
        return $this;
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

    protected function removeBlockFromPage($block, $page): void
    {
        $page->children()->detach($block->id);
    }

}