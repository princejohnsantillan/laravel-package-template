<?php

namespace PrinceJohn\{PackageName}\Test\Feature;

use Orchestra\Testbench\TestCase;
use PrinceJohn\{PackageName}\ServiceProvider;

class BaseTestCase extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            ServiceProvider::class,
        ];
    }
}
