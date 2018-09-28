<?php

namespace Flagrow\Steamroller;

use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    use Concerns\CreatesForum, Concerns\MakesApiRequests;

    protected function setUp()
    {
        if (! $this->app) {
            $this->refreshApplication();
        }
    }
}
