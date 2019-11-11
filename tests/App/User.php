<?php
namespace jhonyspicy\LaravelExamplePackage\Tests\App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $guarded = [];
}