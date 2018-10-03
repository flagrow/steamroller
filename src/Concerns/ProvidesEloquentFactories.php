<?php

namespace Flagrow\Steamroller\Concerns;

use Illuminate\Database\Eloquent\Factory;

trait ProvidesEloquentFactories
{
    /**
     * Create a model factory builder for a given class, name, and amount.
     *
     * @param  dynamic  class|class,name|class,amount|class,name,amount
     * @return \Illuminate\Database\Eloquent\FactoryBuilder
     */
    protected function factory()
    {
        app('db');

        /** @var Factory $factory */
        $factory = app(Factory::class);

        $factory->load(__DIR__ . '/../Factories/');

        $arguments = func_get_args();

        if (isset($arguments[1]) && is_string($arguments[1])) {
            return $factory->of($arguments[0], $arguments[1])->times(isset($arguments[2]) ? $arguments[2] : null);
        } elseif (isset($arguments[1])) {
            return $factory->of($arguments[0])->times($arguments[1]);
        } else {
            return $factory->of($arguments[0]);
        }
    }
}
