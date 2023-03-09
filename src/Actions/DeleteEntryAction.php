<?php

namespace ProdigyPHP\Prodigy\Actions;

use Illuminate\Database\Eloquent\Collection;
use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Entry;
use ProdigyPHP\Prodigy\Models\Page;

class DeleteEntryAction {

    protected Entry $entry;

    public function __construct(Entry $entry)
    {
        $this->entry = $entry;
    }

    public function execute(): void
    {
        $this->deleteEntry();
    }

    public function deleteEntry(): self
    {
        $this->entry->delete();
        return $this;
    }

}