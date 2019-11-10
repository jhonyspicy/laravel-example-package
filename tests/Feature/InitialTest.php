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

    /**
     * https://www.youtube.com/watch?v=T9lA6zq49BE&list=PLpzy7FIRqpGBQ_aqz_hXDBch1aAA-lmgu&index=12
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [];
    }
}
