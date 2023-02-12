<?php

namespace ProdigyPHP\Prodigy;

use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ProdigyPHP\Prodigy\Commands\ProdigyCommand;
use Livewire\Livewire;

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

        // load blade components
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'prodigy');
		$this->configureComponents();
    }

    protected function configureComponents()
    {
		$this->callAfterResolving(BladeCompiler::class, function () {
			$this->registerComponent('inner');
			$this->registerComponent('wrapper');
		});
	}

    protected function registerComponent(string $component)
    {
        Blade::component('prodigy::components.'.$component, 'mypackage-'.$component);
    }

    /**
     * Register the Blade form components.
     *
     * @return $this
     */
//    private function registerComponents(): self
//    {
//        Blade::componentNamespace('ProdigyPHP\\Prodigy\\', config('library.prefix.form'));
//        Blade::componentNamespace('TomSix\\Components\\View\\Components\\Navigation', config('library.prefix.navigation'));
//
//        return $this;
//    }

}
