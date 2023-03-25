<?php

namespace ProdigyPHP\Prodigy;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Compilers\BladeCompiler;
use Livewire\Livewire;
use ProdigyPHP\Prodigy\Commands\InstallCommand;
use ProdigyPHP\Prodigy\Commands\ProdigyBackupCommand;
use ProdigyPHP\Prodigy\Commands\PruneCommand;
use ProdigyPHP\Prodigy\Commands\UserCommand;
use ProdigyPHP\Prodigy\Http\Controllers\LoginController;
use ProdigyPHP\Prodigy\Http\Controllers\WelcomeController;
use ProdigyPHP\Prodigy\Livewire\BlockComponent;
use ProdigyPHP\Prodigy\Livewire\BlocksList;
use ProdigyPHP\Prodigy\Livewire\EditBlock;
use ProdigyPHP\Prodigy\Livewire\EditEntry;
use ProdigyPHP\Prodigy\Livewire\Editor;
use ProdigyPHP\Prodigy\Livewire\EntriesList;
use ProdigyPHP\Prodigy\Livewire\PageSettingsEditor;
use ProdigyPHP\Prodigy\Livewire\PagesList;
use ProdigyPHP\Prodigy\Livewire\PhotoUploader;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ProdigyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        // Reference: https://github.com/spatie/laravel-package-tools
        $package
            ->name('prodigy')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('2023_03_01_create_prodigy_tables')
            ->hasCommands([
                ProdigyBackupCommand::class,
                InstallCommand::class,
                UserCommand::class,
                PruneCommand::class,
            ]);
    }

public function bootingPackage(): void
{
    $this->registerLivewireComponents();

    // load blade components
    $this->loadViewsFrom(__DIR__.'/../resources/views', 'prodigy');
    $this->configureComponents();

    $this->publishes([
        __DIR__.'/../public' => public_path('vendor/prodigy'),
    ], 'prodigy-assets');

    $this->publishes([
        __DIR__.'/../resources/schemas' => resource_path('schemas'),
    ], 'prodigy-schemas');

    Relation::enforceMorphMap([
        'page' => 'ProdigyPHP\Prodigy\Models\Page',
        'entry' => 'ProdigyPHP\Prodigy\Models\Entry',
        'block' => 'ProdigyPHP\Prodigy\Models\Block',
    ]);

    $this->defineProdigyUploadDisk();

    $this->gate();
}

    /**
     * Registers a custom media disk, which allows us to
     * put uploads at /prodigy/media. This makes site
     * conversions, especially manual ones, a lot easier.
     */
    public function defineProdigyUploadDisk()
    {
        app()->config['filesystems.disks.prodigy'] = [
            'driver' => 'local',
            'root' => base_path('prodigy/media'),
            'url' => env('APP_URL').'/prodigy',
        ];

        // Consider opening up this to be more flexible.
        // This is spliced in in such a weird way because
        // if the folder contains a period (as in /prodigyphp.com)
        // the link will break.
        config(['filesystems.links' => [
            ...app()->config['filesystems.links'],
            public_path('prodigy') => base_path('prodigy/media'),
        ]]);
    }

    public function registerLivewireComponents()
    {
        Livewire::component('prodigy-page', ProdigyPage::class);
        Livewire::component('prodigy-block', BlockComponent::class);

        Livewire::component('prodigy-editor', Editor::class);
        Livewire::component('prodigy-edit-block', EditBlock::class);
        Livewire::component('prodigy-blocks-list', BlocksList::class);
        Livewire::component('prodigy-pages-list', PagesList::class);
        Livewire::component('prodigy-page-settings-edit', PageSettingsEditor::class);
        Livewire::component('prodigy-photo-uploader', PhotoUploader::class);
        Livewire::component('prodigy-entries-list', EntriesList::class);
        Livewire::component('prodigy-edit-entry', EditEntry::class);
    }

    protected function configureComponents()
    {
        $this->callAfterResolving(BladeCompiler::class, function () {
            $this->registerComponent('structure.inner');
            $this->registerComponent('structure.wrapper');
            $this->registerComponent('blocks.row');
        });
    }

    protected function registerComponent(string $component)
    {
        Blade::component('prodigy::components.'.$component, 'prodigy-'.$component);
    }

    public function packageRegistered()
    {
        Route::namespace('ProdigyPHP\Prodigy\Http\Controllers')
            ->prefix(Prodigy::path())
            ->middleware([
                'web',
            ])
            ->group(function () {
                Route::get('/login', [LoginController::class, 'index'])->name('prodigy.login');
                Route::post('/login', [LoginController::class, 'login'])->name('prodigy.login');
                Route::post('/logout', [LoginController::class, 'logout'])->name('prodigy.logout');
                Route::get('/welcome', [WelcomeController::class, 'index']);
            });
    }

    /**
     * Register the Prodigy gate.
     *
     * This gate determines who can access Prodigy in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewProdigy', function ($user) {
            return in_array($user->email, config('prodigy.access_emails'));
        });
    }
}
