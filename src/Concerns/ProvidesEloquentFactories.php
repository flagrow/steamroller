<?php

namespace Flagrow\Steamroller\Concerns;

use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factory;

trait ProvidesEloquentFactories
{
    protected function bindFactory()
    {
        app('db');

        /** @var Factory $factory */
        $factory = new Factory(Faker::create());

        $factory->load(__DIR__ . '/../Factories/');

        app()->singleton(
            Faker::class,
            $factory
        );
    }
}
