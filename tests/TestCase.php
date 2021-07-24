<?php

namespace Ontherocksoftware\LaravelRedAmberGreen\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Ontherocksoftware\LaravelRedAmberGreen\LaravelRedAmberGreenServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Ontherocksoftware\\LaravelRedAmberGreen\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelRedAmberGreenServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        include_once __DIR__.'/../database/migrations/create_laravel-red-amber-green_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
