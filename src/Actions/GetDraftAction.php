<?php

namespace ProdigyPHP\Prodigy\Actions;

use Illuminate\Support\Facades\DB;
use ProdigyPHP\Prodigy\Models\Page;

class GetDraftAction
{
    public function execute(Page $public_page): Page
    {
        // If we already have a draft, send it back.
        if ($public_page->draftPage) {
            return $public_page->draftPage;
        }

        /**
         * Create a draft. We set a slug in order to keep
         * it from appending '-2' to the page.
         * We manually call all the methods here in order to
         * allow it to be publishable.
         */
        return DB::transaction(function () use ($public_page) {
            return (new DuplicatePageAction($public_page))
                ->setSlug($public_page->slug)
                ->setPublicPageForDraftPage($public_page->id)
                ->duplicatePage(true)
                ->duplicateMedia()
                ->duplicateBlocks()
                ->duplicateDraft()
                ->getNewPage();
        });
    }
}
