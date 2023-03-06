<?php

namespace ProdigyPHP\Prodigy\Actions;

use Illuminate\Http\RedirectResponse;
use Livewire\Redirector;
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
        return $this->deletePublicPage()
                    ->publishDraft()
                    ->closeProdigyPanel();
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
//            'id' => $this->draft->public_page_id,   // change draft ID to the old public page ID
            'public_page_id' => null,               // There is no longer a draft
            'published_at' => now()                 // It's published.
        ]);
        return $this;
    }

    public function closeProdigyPanel()
    {
        return redirect($this->draft->slug);
    }

}