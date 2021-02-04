<?php namespace DieterCoopman\Objects;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ObjectsServiceProvider extends PackageServiceProvider{

    public function configurePackage(Package $package): void
    {
        $package->name('objects');
    }

}
