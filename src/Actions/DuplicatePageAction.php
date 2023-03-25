<?php

namespace ProdigyPHP\Prodigy\Actions;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use ProdigyPHP\Prodigy\Models\Page;

class DuplicatePageAction
{
    protected Page $original_page;

    protected Page $new_page;

    protected Collection $blocks;

    protected ?int $public_page_id = null;

    protected ?string $slug = null;

    public function __construct(Page $original_page)
    {
        $this->original_page = $original_page;
        $this->blocks = $this->original_page->children()->with('children')->get();
    }

    public function execute(): Page
    {
        return DB::transaction(function () {
            return $this->duplicatePage()
                ->duplicateBlocks()
                ->duplicateMedia()
                ->duplicateDraft()
                ->getNewPage();
        });
    }

    public function duplicatePage($shouldBePublishable = false): self
    {
        // new drafts are "duplicated" but need published_at to be preserved.
        // new duplicated pages should not be published on created.
        if ($shouldBePublishable) {
            $this->new_page = $this->original_page->replicate(); // Don't remove anything for the draft.
        } else {
            $this->new_page = $this->original_page->replicate(['published_at']); // remove 'published_at' from new page.
        }

        // attach public_page_id to the draft
        $this->new_page->public_page_id = $this->public_page_id;

        // add slug
        $this->new_page->slug = ($this->slug) ?? str($this->new_page->slug)->append('-2')->toString();

        $this->new_page->save();

        return $this;
    }

    public function duplicateMedia(): self
    {
        $media_collection = $this->original_page->getMedia('prodigy');
        info($media_collection->count());
        foreach ($media_collection as $media) {
            $media->copy($this->new_page, 'prodigy');
        }

        return $this;
    }

    public function duplicateBlocks(): self
    {
        $this->blocks->each(function ($block) {
            $block->deepCopy($this->new_page, $block);
        });

        return $this;
    }

    public function setPublicPageForDraftPage(int $public_page_id): self
    {
        $this->public_page_id = $public_page_id;

        return $this;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Drafts also get duplicated, but they need the public page
     * to be set in advance, so they know where to link to.
     */
    public function duplicateDraft(): self
    {
        if ($draft = $this->original_page->draftPage) {
            (new DuplicatePageAction($draft))
                ->setPublicPageForDraftPage($this->new_page->id)
                ->execute();
        }

        return $this;
    }

    public function getNewPage(): Page
    {
        return $this->new_page;
    }
}
