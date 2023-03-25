<?php

namespace ProdigyPHP\Prodigy\Actions;

use ProdigyPHP\Prodigy\Models\Entry;

class DeleteEntryAction
{
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
