<?php

namespace ProdigyPHP\Prodigy\Actions;

use Illuminate\Support\Facades\DB;
use ProdigyPHP\Prodigy\Models\Link;
use ProdigyPHP\Prodigy\Models\Page;

class GetDraftAction {

    public function execute(Page $public_page): Page
    {
        // If we already have a draft, send it back.
        if ($public_page->draftPage) {
            return $public_page->draftPage;
        }

        /**
         * Create a draft. We set a slug in order to keep
         * it from appending '-2' to the page.
         */
        return DB::transaction(function () use ($public_page) {
            return (new DuplicatePageAction($public_page))
                ->setSlug($public_page->slug)
                ->setPublicPageForDraftPage($public_page->id)
                ->execute();
        });
    }

//    protected function replicatePage(Page $public_page): Page
//    {
//        $draft = $public_page->replicate()->fill([
//            'public_page_id' => $public_page->id
//        ]);
//        $draft->save();
//
//        return $draft;
//    }

}