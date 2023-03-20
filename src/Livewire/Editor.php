<?php

namespace ProdigyPHP\Prodigy\Livewire;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use ProdigyPHP\Prodigy\Actions\DeleteEntryAction;
use ProdigyPHP\Prodigy\Actions\DeleteLinkAction;
use ProdigyPHP\Prodigy\Actions\DeletePageAction;
use ProdigyPHP\Prodigy\Actions\DuplicateLinkAction;
use ProdigyPHP\Prodigy\Actions\DuplicatePageAction;
use ProdigyPHP\Prodigy\Actions\PublishPageAction;
use ProdigyPHP\Prodigy\Facades\Prodigy;
use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Entry;
use ProdigyPHP\Prodigy\Models\Link;
use ProdigyPHP\Prodigy\Models\Page;

class Editor extends Component {

    public Page $page;

    public Collection $blocks;
    public Collection $groups;


    public string $editor_state = 'blocksList'; // blocksList, pagesList, blockEditor, pageEditor, entriesList, entryEditor
    public int|null $editor_detail = null; // the detail ID to use for editing blocks, entries, or pages.
    public null|string $entries_type = null;

     protected $queryString = ['editor_state', 'editor_detail', 'entries_type'];

    protected $listeners = [
        'viewEntriesByType',
        'createEntryByType',
        'editEntry',
        'deleteEntry',
        'editBlock',
        'duplicateLink',
        'deleteLink',
        'updateState',
        'publishDraft',
        'deleteDraft',
        'createPage',
        'duplicatePageFromDraft',
        'deletePage',
        'editPageSettings',
        'addChildBlockThenEdit'];

    public function mount(Page $page)
    {
        $this->page = $page;
    }

    public function render()
    {
        return view('prodigy::livewire.editor');
    }

    public function editBlock($id)
    {
        $this->editor_detail = $id;
        $this->editor_state = 'blockEditor';
    }

    public function createEntryByType(string $type)
    {
        $entry = Entry::create(['type' => $type, 'title' => '', 'slug' => '']); // clear anything else.
        $this->editor_detail = $entry->id;
        $this->editor_state = 'entryEditor';
    }

    public function editEntry($id)
    {
        $this->updateState('entryEditor', $id);
    }

    public function deleteEntry(int $entry_id)
    {
        Gate::authorize('viewProdigy', auth()->user());

        $entry = Entry::find($entry_id);
        (new DeleteEntryAction($entry))->execute();
        $this->emit('fireGlobalRefresh');
    }

    public function addChildBlockThenEdit($key, $parent_block_id): void
    {
        $block = Block::find($parent_block_id);

        $child_block = Block::create(['key' => $key]);

        $block->children()->attach($child_block->id, ['order' => 0]);

        $this->editBlock($child_block->id);
    }


    public function duplicateLink(int $link_id)
    {
        Gate::authorize('viewProdigy', auth()->user());

        (new DuplicateLinkAction($link_id))->execute();
        $this->emit('fireGlobalRefresh');
    }

    public function deleteLink(int $link_id)
    {
        Gate::authorize('viewProdigy', auth()->user());

        $link = Link::find($link_id);
        (new DeleteLinkAction($link))->execute();
        $this->updateState('blocksList');
        $this->emit('fireGlobalRefresh');
    }

    public function publishDraft(int $draft_id)
    {
        Gate::authorize('viewProdigy', auth()->user());
        $draft = Page::find($draft_id);
        (new PublishPageAction($draft))->execute();
    }

     public function deleteDraft(int $draft_id)
    {
        Gate::authorize('viewProdigy', auth()->user());

        $draft = Page::find($draft_id);
        $redirect_slug = $draft->publicPage->slug;

        (new DeletePageAction($draft))->execute();

        $this->redirect($redirect_slug);
    }

    public function deletePage(int $page_id)
    {
        Gate::authorize('viewProdigy', auth()->user());

        $page = Page::find($page_id);
        (new DeletePageAction($page))->deleteDraft()->execute();

        $this->redirect(config('prodigy.home') . "?pro_editing=true");
//        $this->emit('fireGlobalRefresh');
    }

    public function updateState(string $stateString, int $editor_detail = null, string $entries_type = null)
    {
        $this->editor_detail = $editor_detail;
        $this->entries_type = $entries_type;
        $this->emit('fireGlobalRefresh');
        $this->editor_state = $stateString;
    }

    public function createPage()
    {
        Gate::authorize('viewProdigy', auth()->user());

        $this->updateState('pageEditor');
    }

    public function duplicatePageFromDraft(int $draft_id)
    {
        Gate::authorize('viewProdigy', auth()->user());

        $draft = Page::find($draft_id);
        $page = Page::find($draft->public_page_id); // get the *published* page
        $new_page = (new DuplicatePageAction($page))->execute();

        $this->redirect($new_page->slug . "?pro_editing=true");
    }

    public function viewEntriesByType(string $type)
    {
        Gate::authorize('viewProdigy', auth()->user());

        $this->updateState('entriesList', null, $type);
    }

    public function editPageSettings(int $page_id)
    {
        Gate::authorize('viewProdigy', auth()->user());

        $this->updateState('pageEditor', $page_id);
    }

}
