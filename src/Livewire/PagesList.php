<?php

namespace ProdigyPHP\Prodigy\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;
use ProdigyPHP\Prodigy\Models\Page;

class PagesList extends Component
{
    public ?Page $page;

    public Collection $blocks;

    public Collection $pages;

    public function mount(?Page $page)
    {
        $this->page = $page;
    }

    public function render()
    {
        $this->pages = $this->getPages();

        return view('prodigy::livewire.pages-list');
    }

    public function getPages(): Collection
    {
        $pages = Page::public()->orderBy('slug')->get();

//        $pages->map(function($page) {
//            $page->display =
//        });

        return $pages;
    }
}
