<?php

namespace ProdigyPHP\Prodigy\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use ProdigyPHP\Prodigy\Models\Block;
use ProdigyPHP\Prodigy\Models\Entry;
use ProdigyPHP\Prodigy\Models\Page;

class PruneCommand extends Command
{
    public $signature = 'prodigy:prune {--c|count}';

    public $description = 'Remove zombie blocks that no longer have a link';

    public Carbon $reference_date;

    public function handle(): int
    {
        $this->comment('TODO. This is still broken because i can\'t figure out how to query zombie blocks.');

        $query = Block::whereDoesntHaveMorph('prodigy_links', [Page::class, Block::class, Entry::class]);

        if ($this->option('count')) {
            $query->count();

            return self::SUCCESS;
        }
        $query->get();

        $this->comment('All done');

        return self::SUCCESS;
    }
}
