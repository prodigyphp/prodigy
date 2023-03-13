<?php

namespace ProdigyPHP\Prodigy\Livewire;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use ProdigyPHP\Prodigy\BlockGroups\BlockGroup;
use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Page;

class PageSettingsEditor extends Component {

    public Page $page;

    public $title;

    protected $rules = [
      'page.title' => 'required',
      'page.slug' => 'required',
    ];

    public function mount(int $page_id = null)
    {
        $this->page = Page::findOr($page_id, function() {
           return new Page();
        });
        $this->title = ($this->page->title) ? "Settings – {$this->page->title}" : "Create Page";
    }

    public function render()
    {
        return view('prodigy::livewire.page-settings-editor');
    }

    public function save()
    {
        $this->validate();

        Gate::authorize('viewProdigy', auth()->user());

        $this->page->updateOrCreate([
            'slug' => $this->page->slug,
        ],
        [
            'title' => $this->page->title
        ]);

        $this->close();
    }

    public function close()
    {
        $this->emit('updateState', 'pagesList');
    }

}
