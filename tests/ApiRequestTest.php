<?php

namespace Flagrow\Steamroller\Tests;

use Flagrow\Steamroller\TestCase;
use Flarum\Api\Controller\ListDiscussionsController;

class ApiRequestTest extends TestCase
{
    /**
     * @test
     */
    public function can_hit_the_api()
    {
        $response = $this->call(ListDiscussionsController::class);

        $this->assertEquals(200, $response->getStatusCode());
    }
}
