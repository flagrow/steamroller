<?php

namespace Flagrow\Steamroller\Traits;

use Flarum\Api\Client;

trait MakesApiRequests
{
    public function call($controller, $actor, $queryParams = [], array $body = [])
    {
        /** @var Client $api */
        $api = $this->app->make(Client::class);

        return $api->send($controller, $actor, $queryParams, $body);
    }
}
