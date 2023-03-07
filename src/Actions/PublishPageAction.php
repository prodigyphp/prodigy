<?php

namespace ProdigyPHP\Prodigy\Actions;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Livewire\Redirector;
use ProdigyPHP\Prodigy\Models\Link;
use ProdigyPHP\Prodigy\Models\Page;

class PublishPageAction {

    protected ?Page $publicPage;
    protected Page $draft;

    public function __construct(Page $draft)
    {
        $this->draft = $draft;
        $this->publicPage = $draft->publicPage;

    }

    public function execute()
    {
        DB::transaction(function () {
            $this->deletePublicPage()
                ->updatePageIdOnLinks()
                ->publishDraft()
                ->closeProdigyPanel();
        });
    }

    public function deletePublicPage(): self
    {
        if ($this->publicPage) {
            (new DeletePageAction($this->publicPage))->execute();
        }
        return $this;
    }

    public function publishDraft(): self
    {
        $this->draft->update([
            'id' => $this->draft->public_page_id,   // change draft ID to the old public page ID
            'public_page_id' => null,               // There is no longer a draft
            'published_at' => now()                 // It's published.
        ]);
        return $this;
    }

    public function updatePageIdOnLinks(): self
    {
        Link::where('prodigy_links_id', $this->draft->id)
            ->where('prodigy_links_type', 'page')
            ->update(['prodigy_links_id' => $this->draft->public_page_id]);

        return $this;
    }

    public function closeProdigyPanel()
    {
        return redirect($this->draft->slug);
    }

}