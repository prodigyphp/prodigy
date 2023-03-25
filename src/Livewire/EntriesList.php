<?php

namespace ProdigyPHP\Prodigy\Livewire;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use ProdigyPHP\Prodigy\Actions\GetSchemaAction;
use ProdigyPHP\Prodigy\Actions\ReorderEntriesAction;
use ProdigyPHP\Prodigy\Models\Entry;
use ProdigyPHP\Prodigy\Models\Page;

class EntriesList extends Component
{
    public Page $page;

    public Collection $entries;

    public string $entry_type;

    public array $entry_schema;

    public function mount(Page $page, string $type)
    {
        $this->page = $page;
        $this->entry_type = $type;
        $this->entry_schema = (new GetSchemaAction())->getEntrySchema($type);
    }

    public function reorder(int $entry_id, int $newOrder)
    {
        Gate::authorize('viewProdigy', auth()->user());
        $entry = Entry::find($entry_id);
        (new ReorderEntriesAction($entry))->execute($newOrder);
        $this->emit('fireGlobalRefresh');
    }

    public function render()
    {
        $orderByField = $this->entry_schema['orderBy'] ?? '';
        $this->entries = Entry::ofType($this->entry_type)
            ->when($orderByField, function ($q, $orderByField) {
                return $q->orderBy($orderByField);
            })
            ->get();

        return view('prodigy::livewire.entries-list');
    }
}
