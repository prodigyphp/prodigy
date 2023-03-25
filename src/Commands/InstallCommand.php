<?php

namespace ProdigyPHP\Prodigy\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
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

        if ($this->confirm('Are you installing Prodigy into a fresh Laravel app?', true)) {
            $this->isFresh = true;
        }
        $this->publishVendorFiles();

        $this->setupDatabase();

        $this->migrate();

        $this->addUser();


        $this->setupLayouts();

        $this->enableDynamicRouting();

        $this->addDefaultResources();

        $this->addToGitIgnore();

        $this->info('<fg=white;bg=green>Success!</> Prodigy is installed...make something great!');
        $this->info('Log in at ' . config('app.url') . '/prodigy/login');
        $this->info('And don\'t forget to run `npm install && npm run dev` if you haven\'t already.');
        return self::SUCCESS;
    }

    protected function getStubPath(string $subpath)
    {
        return __DIR__ . '/..' . $subpath;
    }

    protected function addUser(): void
    {
        if ($this->confirm('Add a user?', true)) {
            $this->call('prodigy:user');
        }
    }

    protected function enableDynamicRouting(): void
    {
        if ($this->confirm('Allow Prodigy to use dynamic routing? (recommended!)', true)) {
            $this->comment('Updating web.php to allow automatic routing to Prodigy...');
            $this->configureDynamicRouting();
        } else {
            $this->info('It\'s perfectly fine to not use dynamic routing, but the application will not work until you set up a route and add <livewire:prodigy-page /> to your template.');
        }
    }

    protected function publishVendorFiles(): void
    {
        $this->comment('Publishing Prodigy assets...');
        $this->callSilent('vendor:publish', ['--tag' => 'prodigy-assets']);

        $this->comment('Publishing Prodigy migrations...');
        $this->callSilent('vendor:publish', ['--tag' => 'prodigy-migrations']);

        $this->comment('Publishing Prodigy config file...');
        $this->callSilent('vendor:publish', ['--tag' => 'prodigy-config']);
    }

    protected function setupLayouts(): void
    {
        // Remove the welcome route
        if (File::exists(resource_path('views/welcome.blade.php'))) {
            File::delete(resource_path('views/welcome.blade.php'));
        }
        // Add the layouts folder
        if (!is_dir($layoutPath = $this->laravel->resourcePath('views/layouts'))) {
            (new Filesystem)->makeDirectory($layoutPath, 0755, true);
        }

        // add layouts/app.blade.php
        $to = $this->laravel->resourcePath('views/layouts/app.blade.php');
        $from = $this->getStubPath('/Stubs/app.blade.stub');
        if (!file_exists($to)) {
            file_put_contents($to, file_get_contents($from));
        }
    }

    /**
     * If it's a fresh application, we remove the default welcome view,
     * since we will be replacing that view with our own.
     */
    protected function configureDynamicRouting(): void
    {
        $web_routes_file = base_path('routes/web.php');

        $web_routes_file_contents = file_get_contents($web_routes_file);

        // Replace the default routes file if it's a fresh installation.
        if ($this->isFresh) {
            $from = $this->getStubPath('/Stubs/empty-web-routes.stub');
            $to = $this->laravel->basePath('routes/web.php');
            file_put_contents($to, file_get_contents($from));
        }

        // Add the dynamic route.
        file_put_contents(
            $web_routes_file,
            PHP_EOL . "Route::get('{wildcard}', ProdigyPHP\Prodigy\ProdigyPage::class)->where('wildcard', '.*');",
            FILE_APPEND
        );
    }

    protected function addToGitIgnore(): void
    {
        $this->info('Updating gitignore...');
        $ignore_file = base_path('.gitignore');
        file_put_contents(
            $ignore_file,
            PHP_EOL . "/prodigy" . PHP_EOL . "/public/prodigy" . PHP_EOL . "/storage/backups",
            FILE_APPEND
        );
    }

    protected function setupDatabase(): void
    {
        $this->comment('Making /prodigy folder...');
        if (!File::isDirectory(base_path('/prodigy'))) {
            File::makeDirectory(base_path('/prodigy'));
        }

        if ($this->isFresh) {
            if ($this->confirm('Use SQLite as your database? (recommended!)', true)) {

                $this->comment('Making database...');
                $db_file = base_path('prodigy/prodigy.sqlite');
                if (!file_exists($db_file)) {
                    File::put($db_file, '');
                }

                // Tell them to setup the .env file themselves.
                $this->line('------------------');
                $this->line('<fg=white;bg=blue>One more step!</> paste this into your .env file now:');
                $this->line('DB_CONNECTION=sqlite');
                $this->line('DB_DATABASE=' . $db_file);
                $this->line('DB_FOREIGN_KEYS=true');
                $this->line('------------------');
                $this->ask('Once you\'ve added the three lines above to your .env, press enter.');

                $this->line('Reloading .env file...');

                // reloads the .env file
                $this->call('config:cache');
                $this->call('config:clear');
            }
        }
    }

    protected function addDefaultResources(): void
    {
        $this->comment('Creating some starter blocks in your components folder...');
        File::copyDirectory($this->getStubPath('/Stubs/blocks'), resource_path('views/components/blocks'));

        $this->comment('Creating a starter schema in your resources folder...');
        File::copyDirectory($this->getStubPath('/Stubs/schemas'), resource_path('schemas'));

        $this->comment('Running storage:link to make images visible...');
        $this->call('storage:link');
    }

    // Initial migration ensures we have a users table.
    protected function migrate(): void
    {
        // Spatie creates the media table a bunch, so it needs to only be created once.
        if (!Schema::hasTable('media')) {
            $this->comment('Publishing Spatie\'s media config file...');
            $this->callSilent('vendor:publish', ['--provider' => 'Spatie\MediaLibrary\MediaLibraryServiceProvider', '--tag' => 'migrations']);
        } else {
            $this->comment('Spatie\'s media config file is already published. Skipping.');
        }

        $this->comment('Doing an initial migration...');
//        $this->call('migrate');
        passthru('php artisan migrate');
    }

}
