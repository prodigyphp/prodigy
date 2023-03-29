<?php

namespace ProdigyPHP\Prodigy\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use ProdigyPHP\Prodigy\Actions\BackupAction;

class ProdigyBackupCommand extends Command
{
    public $signature = 'prodigy:backup';

    public $description = 'Save a copy of the SQLite database';

    public Carbon $reference_date;

    public function handle(): int
    {
        if (config('database.default') != 'sqlite') {
            $this->comment('This command currently only supports databases using SQLite.');

            return self::FAILURE;
        }

        (new BackupAction())->execute();

        $this->comment('All done');

        return self::SUCCESS;
    }
}
