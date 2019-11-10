<?php

namespace jhonyspicy\LaravelExamplePackage\Tests\Feature;

use Orchestra\Testbench\TestCase;

class InitialTest extends TestCase
{
    /** @test */
    public function my_first_test()
    {
        $this->assertTrue(true);
    }

    protected function getPackageProviders($app)
    {
        return [];
    }
}
