<?php

namespace Ontherocksoftware\LaravelRedAmberGreen;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ontherocksoftware\LaravelRedAmberGreen\Commands\LaravelRedAmberGreenCommand;

class LaravelRedAmberGreenServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-red-amber-green')
            ->hasConfigFile();
    }
}
