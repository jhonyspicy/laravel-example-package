<?php

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Facades\Hash;
use jhonyspicy\LaravelExamplePackage\Tests\App\User;

/** @var $factory Factory */
$factory->define(User::class, function (Faker $faker) {
    return [
        'name'              => $faker->name,
        'email'             => $faker->unique()->safeEmail,
        'password'          => Hash::make('secret'),
    ];
});
