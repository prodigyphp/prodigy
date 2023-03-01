<?php

namespace ProdigyPHP\Prodigy\Livewire;

use Illuminate\Support\Collection;
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

    public function mount(Page $page = null)
    {
        $this->title = ($page->title) ? "Settings – {$page->title}" : "Create Page";
        $this->page = ($page->title) ? $page : new Page();
    }

    public function render()
    {
        return view('prodigy::livewire.page-settings-editor');
    }

    public function save()
    {
        $this->validate();

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
