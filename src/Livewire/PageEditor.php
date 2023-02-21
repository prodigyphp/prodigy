<?php

namespace ProdigyPHP\Prodigy\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;
use ProdigyPHP\Prodigy\BlockGroups\BlockGroup;
use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Page;

class PageEditor extends Component {

    public Page $page;

    protected $rules = [
      'page.title' => 'required',
      'page.slug' => 'required',
    ];

    public function mount(Page $page = null)
    {
        $this->page = $page ?? new Page();
    }

    public function render()
    {
        return view('prodigy::livewire.page-editor');
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
