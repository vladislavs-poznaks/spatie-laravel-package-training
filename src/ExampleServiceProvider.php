<?php

namespace VladislavsPoznaks\Example;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use VladislavsPoznaks\Example\Commands\ExampleCommand;

class ExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('spatie-laravel-package-training')
            ->hasConfigFile('spatie-laravel-package-training')
            ->hasViews()
            ->hasMigration('create_spatie-laravel-package-training_table')
            ->hasCommand(ExampleCommand::class);
    }
}
