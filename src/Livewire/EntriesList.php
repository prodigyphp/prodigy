<?php

namespace ProdigyPHP\Prodigy\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;
use ProdigyPHP\Prodigy\Actions\GetSchemaAction;
use ProdigyPHP\Prodigy\BlockGroups\BlockGroup;
use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Entry;
use ProdigyPHP\Prodigy\Models\Page;

class EntriesList extends Component {


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

    public function render()
    {
        $this->entries = Entry::ofType($this->entry_type)->get();
        return view('prodigy::livewire.entries-list');
    }

}
