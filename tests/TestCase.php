<?php

namespace ProdigyPHP\Prodigy\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use ProdigyPHP\Prodigy\Models\User;
use ProdigyPHP\Prodigy\ProdigyServiceProvider;
use Spatie\MediaLibrary\MediaLibraryServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'ProdigyPHP\\Prodigy\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            ProdigyServiceProvider::class,
            LivewireServiceProvider::class,
            MediaLibraryServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
//        config()->set('database.default', 'testing');
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('prodigy.access_emails', ['stephen@bate-man.com']);

        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);

        $app['config']->set('app.key', 'base64:iSHOeoNKQaK1OCzOFR2D6bfoDhas2YJ3NOlu/4S9YEw=');

        /**
         * We have to move the schema files into place for the test runner to find them.
         */
        $to = base_path('vendor/prodigyphp/prodigy/resources/views/partials');
        $from = __DIR__.'/../resources/views/partials';
        File::copyDirectory($from, $to);

        /**
         * Migrations
         */
        Schema::dropAllTables();

        $migration = include __DIR__.'/../database/migrations/2014_create_users_table.php';
        $migration->up();

        $migration = include __DIR__.'/../database/migrations/2015_create_media_table.php';
        $migration->up();

        $migration = include __DIR__.'/../database/migrations/2023_03_01_create_prodigy_tables.php.stub';
        $migration->up();
    }

    public function loginCorrectUser()
    {
        $this->actingAs(User::factory()->create(['name' => 'Stephen', 'email' => 'stephen@bate-man.com']));
    }
}
