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

        $this->comment('Thanks for using Prodigy. It is still in early alpha, so let us know what issues you run into.');

        $this->comment('Publishing Prodigy assets...');
        $this->callSilent('vendor:publish', ['--tag' => 'prodigy-assets']);

        $this->comment('Publishing Prodigy migrations...');
        $this->callSilent('vendor:publish', ['--tag' => 'prodigy-migrations']);

        $this->comment('Publishing Prodigy config file...');
        $this->callSilent('vendor:publish', ['--tag' => 'prodigy-config']);

        $this->comment('Publishing Spatie\'s media config file...');
        $this->callSilent('vendor:publish', ['--provider' => 'Spatie\MediaLibrary\MediaLibraryServiceProvider', '--tag' => 'migrations']);

        $this->comment('Doing an initial migration to make sure we have a users table....');
        $this->callSilent('migrate');

        if ($this->confirm('Add a user?')) {
            $this->call('prodigy:user');
        }

        if ($this->confirm('Enable dynamic routing?')) {
            $this->comment('Updating web.php to allow automatic routing to Prodigy...');
            $this->configureDynamicRouting();
        }

        if ($this->confirm('Would you like a sample schema and block?')) {
            $this->comment('Creating some starter blocks in your components folder...');
            File::copyDirectory($this->getStubPath('/Stubs/blocks'), resource_path('views/components/blocks'));

            $this->comment('Creating a starter schema in your resources folder...');
            File::copyDirectory($this->getStubPath('/Stubs/schemas'), resource_path('schemas'));
        }

        $this->comment('Running storage:link to make images visible...');
        $this->call('storage:link');

        $this->info('Prodigy is installed...make something great!');
        $this->info('Log in at' . config('app.url') . '/prodigy/login');
        return self::SUCCESS;
    }

    protected function getStubPath(string $subpath)
    {
        return __DIR__ . '/..' . $subpath;
    }

    protected function configureDynamicRouting(): void
    {
        file_put_contents(
            base_path('routes/web.php'),
            "Route::get('/{wildcard}', ProdigyPHP\Prodigy\ProdigyPage::class)->where('wildcard', '.*');",
            FILE_APPEND
        );
    }

}
