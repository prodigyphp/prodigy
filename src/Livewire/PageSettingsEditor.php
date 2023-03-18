<?php

namespace ProdigyPHP\Prodigy\Livewire;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Livewire\Component;
use ProdigyPHP\Prodigy\Actions\GetEditorFieldAction;
use ProdigyPHP\Prodigy\Actions\GetSchemaAction;
use ProdigyPHP\Prodigy\Actions\GetSchemaRulesAction;
use ProdigyPHP\Prodigy\BlockGroups\BlockGroup;
use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Page;

class PageSettingsEditor extends Component {

    /**
     * -- Why this is called Block --
     * We call the page a "block" because every field has `block.content` hardcoded
     * as a reference to Livewire, which expects a variable on the class called
     * `block`. The other option is to pass down the words `block`, `entry` and
     * `page` to each field.
     */
    public Page $block;

    public $title;
    public bool $creating = false;

    public array $fields;
    public $schema;

    protected function getRules()
    {
        return [
            'block.title' => 'required',
            'block.slug' => [
                'required',
                'starts_with:/',
                // we validate that the slug is unique *among all public pages*, by ignoring the draft page ID AND the public page ID.
                Rule::unique('prodigy_pages', 'slug')->ignore($this->block->id)->where(function ($query) {
                    return $query->where('id', '!=', $this->block->publicPage->id ?? null);
                }),
            ],
            ...(new GetSchemaRulesAction($this->schema, $this->fields, 'block'))->execute()
        ];
    }

    public function mount(GetSchemaAction $schemaBuilder, ?int $page_id = null)
    {
        $this->block = Page::findOr($page_id, function () {
            $this->creating = true;
            return new Page();
        });

        // We must edit the draft page, not the public page.
        if($draft = $this->block->draftPage){
            $this->block = $draft;
        }

        $this->title = ($this->creating) ? "Create Page" : "Settings – {$this->block->title}";

        $this->fields = config('prodigy.fields');
        $this->schema = $schemaBuilder->pageSchema();

    }

    /**
     * Gets the field, loads the view, and sends to the browser.
     * Note: this literally returns a view, which is unusual.
     */
    public function getField($key, array $data): View|null
    {
        return (new GetEditorFieldAction($this->block))->execute($key, $data);
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
            $this->block->create([
                'slug' => $this->block->slug,
                'title' => $this->block->title
            ]);
            $this->close();
            return;
        }

        $this->block->update([
            'slug' => $this->block->slug,
            'title' => $this->block->title
        ]);

        // We need to update both the draft AND the public page, if we have one.
        if ($publicPage = $this->block->publicPage) {
            $publicPage->update([
                'slug' => $this->block->slug,
                'title' => $this->block->title
            ]);
        }
        $this->redirect($this->block->slug . '?pro_editing=true');
    }

    public function close()
    {
        $this->emit('updateState', 'pagesList');
    }

}
