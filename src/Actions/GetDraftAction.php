<?php

namespace ProdigyPHP\Prodigy\Actions;

use ProdigyPHP\Prodigy\Models\Page;

class GetDraftAction {

    public function execute(Page $public_page): Page
    {
        // If we already have a draft, send it back!
        if($public_page->draftPage) {
            return $public_page->draftPage;
        }

        // Create a draft
        $draft = $public_page->draftPage()->create(['title' => $public_page->title, 'slug' => $public_page->slug]);

        // @TODO handle deep replication between public and draft.

        return $draft;
    }

}