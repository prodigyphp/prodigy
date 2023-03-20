<?php

namespace ProdigyPHP\Prodigy\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use ProdigyPHP\Prodigy\Actions\BackupAction;
use Illuminate\Support\Facades\File;

class InstallCommand extends Command {

    public $signature = 'prodigy:install';
    public $description = 'Install prodigy';

    public $isFresh = false;

    public function handle(): int
    {

        $this->comment('Thanks for using Prodigy. It is still in alpha, so let us know what issues you find.');

        if ($this->confirm('Are you installing into a fresh Laravel app?', true)) {
            $this->isFresh = true;
        }

        $this->comment('Publishing Prodigy assets...');
        $this->callSilent('vendor:publish', ['--tag' => 'prodigy-assets']);

        $this->comment('Publishing Prodigy migrations...');
        $this->callSilent('vendor:publish', ['--tag' => 'prodigy-migrations']);

        $this->comment('Publishing Prodigy config file...');
        $this->callSilent('vendor:publish', ['--tag' => 'prodigy-config']);

        // Spatie creates a table here, so it must only run once.
        if (!Schema::hasTable('media')) {
            $this->comment('Publishing Spatie\'s media config file...');
            $this->callSilent('vendor:publish', ['--provider' => 'Spatie\MediaLibrary\MediaLibraryServiceProvider', '--tag' => 'migrations']);
        } else {
            $this->comment('Spatie\'s media config file is already published. Skipping.');
        }

        // Initial migration ensures we have a users table.
        $this->comment('Doing an initial migration...');
        $this->call('migrate');

        if ($this->confirm('Add a user?', true)) {
            $this->call('prodigy:user');
        }

        if ($this->confirm('Enable dynamic routing?', true)) {
            $this->comment('Updating web.php to allow automatic routing to Prodigy...');
            $this->configureDynamicRouting();
        } else {
            $this->info('It\'s perfectly fine to not use dynamic routing, but the application will not work until you set up a route and add <livewire:prodigy-page /> to your template.');

        }

        $this->comment('Creating some starter blocks in your components folder...');
        File::copyDirectory($this->getStubPath('/Stubs/blocks'), resource_path('views/components/blocks'));

        $this->comment('Creating a starter schema in your resources folder...');
        File::copyDirectory($this->getStubPath('/Stubs/schemas'), resource_path('schemas'));

        $this->comment('Running storage:link to make images visible...');
        $this->call('storage:link');

        $this->info('Prodigy is installed...make something great!');
        $this->info('Log in at ' . config('app.url') . '/prodigy/login');
        return self::SUCCESS;
    }

    protected function getStubPath(string $subpath)
    {
        return __DIR__ . '/..' . $subpath;
    }

    /**
     * If it's a fresh application, we remove the default welcome view,
     * since we will be replacing that view with our own.
     */
    protected function configureDynamicRouting(): void
    {
        $web_routes_file = base_path('routes/web.php');

        $web_routes_file_contents = file_get_contents($web_routes_file);

        // Remove the default view if it's a fresh installation.
        if($this->isFresh) {
            str_replace(
                "Route::get('/', function () {".PHP_EOL."return view('welcome');".PHP_EOL."});",
                "",
                $web_routes_file_contents
            );

            file_put_contents($web_routes_file, $web_routes_file_contents);
        }

        // Add the dynamic route.
        file_put_contents(
            $web_routes_file,
            PHP_EOL."Route::get('{wildcard}', ProdigyPHP\Prodigy\ProdigyPage::class)->where('wildcard', '.*');",
            FILE_APPEND
        );
    }

}
