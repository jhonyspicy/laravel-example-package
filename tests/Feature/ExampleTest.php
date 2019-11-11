<?php

namespace jhonyspicy\LaravelExamplePackage\Tests\Feature;

use jhonyspicy\LaravelExamplePackage\Tests\App\User;
use Orchestra\Testbench\TestCase;

class ExampleTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->withFactories(__DIR__ . '/../database/factory');
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);
    }

    protected function getPackageProviders($app)
    {
        return [
            \jhonyspicy\LaravelExamplePackage\Provider::class
        ];
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        /** @var User $user */
        $user = factory(User::class)->create();
//        fwrite(STDOUT, print_r($user->toArray()));

        $this->assertTrue(true);
    }
}
