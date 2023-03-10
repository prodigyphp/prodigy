<?php

namespace ProdigyPHP\Prodigy\Actions;

use Illuminate\Database\Eloquent\Collection;
use ProdigyPHP\Prodigy\Models\Entry;

class ReorderEntriesAction {

    protected Collection $blocks;
    protected Entry $entry;
    protected string $type;

    public function __construct($entry)
    {
        $this->entry = $entry;
        $this->type = $this->entry->type;
    }

    public function execute(int $new_order)
    {
        $entries = Entry::ofType($this->type)->orderBy('order')->get();

        // Remove the existing entry from the list.
        $entries = $entries->filter(function($e){
            return $e->id != $this->entry->id;
        });

        // We count starting at one, but PHP arrays start at zero, so we have to manually adjust.
        $zero_based_order = $new_order;

        // splice in the block to the collection.
        $entries->splice($zero_based_order, 0, [$this->entry]);

        // Reorder the blocks
        $order = 1;
        foreach($entries as $newly_ordered_entry) {
            $newly_ordered_entry->update(['order' => $order]);
            $order++;
        }
    }

    public function forEntriesByType() : self
    {

        return $this;
    }
}