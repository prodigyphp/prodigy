<?php

namespace ProdigyPHP\Prodigy\Commands;

use Illuminate\Console\Command;

class ProdigyCommand extends Command
{
    public $signature = 'prodigy';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
