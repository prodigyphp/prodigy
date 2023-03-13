<?php

namespace ProdigyPHP\Prodigy\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use ProdigyPHP\Prodigy\Actions\BackupAction;
use Illuminate\Support\Facades\File;

class InstallCommand extends Command {

    public $signature = 'prodigy:install';
    public $description = 'Install prodigy';

    public function handle(): int
    {

        $this->comment('Thanks for using Prodigy. At this moment, it is still in early alpha, so let us know what issues you run into.');
        $this->newLine(3);
        $this->comment('Publishing Prodigy assets...');
        $this->callSilent('vendor:publish', ['--tag' => 'prodigy-assets']);

        $this->comment('Publishing Prodigy migrations...');
        $this->callSilent('vendor:publish', ['--tag' => 'prodigy-migrations']);

        $this->comment('Publishing Prodigy config file...');
        $this->callSilent('vendor:publish', ['--tag' => 'prodigy-config']);

        if ($this->confirm('Would you like a sample schema and block?')) {
            File::copyDirectory($this->getStubPath('/Stubs/blocks'), resource_path('views/components'));
            File::copyDirectory($this->getStubPath('/Stubs/schemas'), resource_path('views/components'));
        }

        $this->info('Prodigy is installed...make something great!');
        return self::SUCCESS;
    }

    protected function getStubPath(string $subpath)
    {
        return __DIR__ . '..' . $subpath;
    }


}
