<?php

namespace ProdigyPHP\Prodigy\Livewire;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use ProdigyPHP\Prodigy\Actions\DeleteLinkAction;
use ProdigyPHP\Prodigy\Actions\DuplicateLinkAction;
use ProdigyPHP\Prodigy\Facades\Prodigy;
use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Entry;
use ProdigyPHP\Prodigy\Models\Link;
use ProdigyPHP\Prodigy\Models\Page;

class Editor extends Component {

    public Page $page;

    public Collection $blocks;
    public Collection $groups;

    public ?Block $editing_block;
    public ?Entry $editing_entry;
    public ?Page $editing_page;

    public string $viewing_entries_type;

    public string $editorState = 'blocksList'; // blocksList, pagesList, blockEditor, pageEditor, entriesList, entryEditor

    protected $listeners = [
        'viewEntriesByType',
        'createEntryByType',
        'editEntry',
        'editBlock',
        'duplicateLink',
        'deleteLink',
        'updateState',
        'createPage',
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
        $this->editing_block = null; // clear anything else out first.
        $this->editing_block = Block::find($id);
        $this->editorState = 'blockEditor';
    }

    public function createEntryByType(string $type)
    {
        $this->editing_entry = Entry::create(['type' => $type, 'title' => '', 'slug' => '']); // clear anything else.
        $this->editorState = 'entryEditor';
    }

    public function editEntry($id)
    {
        $this->editing_entry = null; // clear anything else out first.
        $this->editing_entry = Entry::find($id);
        $this->editorState = 'entryEditor';
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

        (new DeleteLinkAction($link_id))->execute();
        $this->emit('fireGlobalRefresh');
    }

    public function deletePage(int $page_id)
    {
        Gate::authorize('viewProdigy', auth()->user());

        $page = Page::find($page_id);
        $page->delete();

        $this->redirect(config('prodigy.home') . "?editing=true");
//        $this->emit('fireGlobalRefresh');
    }

    public function updateState(string $stateString)
    {
        $this->emit('fireGlobalRefresh');
        $this->editorState = $stateString;
    }

    public function createPage()
    {
        Gate::authorize('viewProdigy', auth()->user());

        $this->editing_page = null;
        $this->updateState('pageEditor');
    }

    public function viewEntriesByType(string $type)
    {
        Gate::authorize('viewProdigy', auth()->user());

        $this->viewing_entries_type = $type;
        $this->updateState('entriesList');
    }

    public function editPageSettings(int $page_id)
    {
        Gate::authorize('viewProdigy', auth()->user());

        $this->editing_page = Page::findOrfail($page_id);
        $this->updateState('pageEditor');
    }

}
