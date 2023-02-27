<?php

namespace ProdigyPHP\Prodigy\Livewire;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use ProdigyPHP\Prodigy\Actions\DeleteLinkAction;
use ProdigyPHP\Prodigy\Actions\DuplicateLinkAction;
use ProdigyPHP\Prodigy\Facades\Prodigy;
use ProdigyPHP\Prodigy\Models\Link;
use ProdigyPHP\Prodigy\Models\Page;

class Editor extends Component {

    public Page $page;

    public Collection $blocks;
    public Collection $groups;

    public ?Link $editing_link;
    public ?Page $editing_page;

    public string $editorState = 'blocksList'; // blocksList, pagesList, linkEditor, pageEditor

    protected $listeners = ['editLink', 'duplicateLink', 'deleteLink', 'updateState', 'createPage', 'editPage', 'addChildBlockThenEdit'];

    public function mount(Page $page)
    {
        $this->page = $page;
    }

    public function render()
    {
        return view('prodigy::livewire.editor');
    }

    public function editLink($id)
    {
        $this->editing_link = null; // clear anything else out first.
        $this->editing_link = Link::find($id);
        $this->editorState = 'linkEditor';
    }

//    public function addChildBlockThenEdit($key, $parent_block_id): void
//    {
//        $block = Block::find($parent_block_id);
//        $child_block = $block->repeaterChildren()->create([
//            'key' => $key
//        ]);
//
//        $this->editLink($child_block->pivot->id);
//    }


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

    public function editPage(int $page_id)
    {
        Gate::authorize('viewProdigy', auth()->user());

        $this->editing_page = Page::findOrfail($page_id);
        $this->updateState('pageEditor');
    }

}
