<?php
namespace jhonyspicy\LaravelExamplePackage;

use Illuminate\Support\ServiceProvider;

class Provider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
/*
        \Log::extend('foo', function ($app, $config) {
            return new Bar($config);
        });
*/

/*
        Hash::extend('hoge', function (Application $app) {
            return new Fuga($app['config']['hashing.hoge'] ?? []);
        });
 */
    }
}
