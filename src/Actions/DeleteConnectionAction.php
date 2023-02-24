<?php

namespace ProdigyPHP\Prodigy\Actions;

use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\BlockPage;
use ProdigyPHP\Prodigy\Models\BlockRow;
use ProdigyPHP\Prodigy\Models\Page;

class DeleteConnectionAction {

    protected int $connection_id;
    protected string $connection_type; // page | row
    protected Page $page;
    protected Block $row;
    protected BlockPage|BlockRow $connection;

    public function __construct(int $connection_id, string $connection_type)
    {
        $this->connection_id = $connection_id;
        $this->connection_type = $connection_type;

        if ($connection_type == 'page') {
            $this->connection = BlockPage::findOrFail($this->connection_id);
        } else {
            $this->connection = BlockRow::findOrFail($this->connection_id);
        }
    }

    public function execute(): void
    {

        $block = $this->connection->block;

        // We separately manage deleting global blocks.
        if (!$block->is_global) {
            // Delete non-global child blocks.
            $children = $block->children;
            $children->map(function ($child) {
                if (!$child->is_global) {
                    $child->delete();
                }
            });

            // Delete block itself.
            $block->delete();
        }

        // Remove the connection.
        $this->connection->delete();

    }

}