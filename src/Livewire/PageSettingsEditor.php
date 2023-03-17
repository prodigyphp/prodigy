<?php

namespace ProdigyPHP\Prodigy\Livewire;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use Livewire\Component;
use ProdigyPHP\Prodigy\BlockGroups\BlockGroup;
use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Page;

class PageSettingsEditor extends Component {

    public Page $page;

    public $title;
    public bool $creating = false;

    protected function getRules()
    {
        return [
            'page.title' => 'required',
            'page.slug' => [
                'required',
                'starts_with:/',
                // we validate that the slug is unique *among all public pages*, by ignoring the draft page ID AND the public page ID.
                Rule::unique('prodigy_pages', 'slug')->ignore($this->page->id)->where(function ($query) {
                    return $query->where('id', '!=', $this->page->publicPage->id ?? null);
                })
            ]
        ];
    }

    public function mount(int $page_id = null)
    {
        $this->page = Page::findOr($page_id, function () {
            $this->creating = true;
            return new Page();
        });
        $this->title = ($this->creating) ? "Create Page" : "Settings – {$this->page->title}";
    }

    public function render()
    {
        return view('prodigy::livewire.page-settings-editor');
    }

    public function save(): void
    {
        $this->validate();

        Gate::authorize('viewProdigy', auth()->user());

        if ($this->creating) {
            $this->page->create([
                'slug' => $this->page->slug,
                'title' => $this->page->title
            ]);
            $this->close();
            return;
        }

        $this->page->update([
            'slug' => $this->page->slug,
            'title' => $this->page->title
        ]);

        // We need to update both the draft AND the public page, if we have one.
        if ($publicPage = $this->page->publicPage) {
            $publicPage->update([
                'slug' => $this->page->slug,
                'title' => $this->page->title
            ]);
        }
        $this->redirect($this->page->slug . '?pro_editing=true');
    }

    public function close()
    {
        $this->emit('updateState', 'pagesList');
    }

}
