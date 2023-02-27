<?php

namespace ProdigyPHP\Prodigy;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Compilers\BladeCompiler;
use Livewire\Livewire;
use ProdigyPHP\Prodigy\Commands\ProdigyCommand;
use ProdigyPHP\Prodigy\Http\Controllers\LoginController;
use ProdigyPHP\Prodigy\Livewire\BlocksList;
use ProdigyPHP\Prodigy\Livewire\EditChildBlock;
use ProdigyPHP\Prodigy\Livewire\PageEditor;
use ProdigyPHP\Prodigy\Livewire\EditBlock;
use ProdigyPHP\Prodigy\Livewire\Editor;
use ProdigyPHP\Prodigy\Livewire\PagesList;
use ProdigyPHP\Prodigy\Livewire\PhotoUploader;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ProdigyServiceProvider extends PackageServiceProvider {

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('prodigy')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_prodigy_table')
            ->hasCommand(ProdigyCommand::class);
    }

    public function bootingPackage(): void
    {

        // Add livewire components
        Livewire::component('prodigy-page', ProdigyPage::class);
        Livewire::component('prodigy-editor', Editor::class);
        Livewire::component('prodigy-edit-block', EditBlock::class);
//        Livewire::component('prodigy-edit-child-block', EditChildBlock::class);
        Livewire::component('prodigy-blocks-list', BlocksList::class);
        Livewire::component('prodigy-pages-list', PagesList::class);
        Livewire::component('prodigy-page-edit', PageEditor::class);
        Livewire::component('prodigy-photo-uploader', PhotoUploader::class);

        // load blade components
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'prodigy');
        $this->configureComponents();

        $this->publishes([
            __DIR__ . '/../public' => public_path('vendor/prodigy'),
        ], 'prodigy');

        Relation::enforceMorphMap([
            'page' => 'ProdigyPHP\Prodigy\Models\Page',
            'block' => 'ProdigyPHP\Prodigy\Models\Block',
        ]);

        $this->gate();
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
        Blade::component('prodigy::components.' . $component, 'prodigy-' . $component);
    }

    public function packageRegistered()
    {
        Route::namespace('Laravel\Nova\Http\Controllers')
            ->prefix(Prodigy::path())
            ->middleware([
                'web'
            ])
            ->group(function () {
                Route::get('/login', [LoginController::class, 'index']);
                Route::post('/login', [LoginController::class, 'login'])->name('prodigy.login');
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
            return in_array($user->email, [
                'stephen@bate-man.com'
            ]);
        });
    }

}
