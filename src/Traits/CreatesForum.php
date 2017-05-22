<?php

namespace Flagrow\Steamroller\Traits;

use Flarum\Forum\Server;
use Flarum\Foundation\Application;

trait CreatesForum
{

    /**
     * @var Server
     */
    protected $forum;

    /**
     * @var Application
     */
    protected $app;

    protected function createsForumServer()
    {
        $this->forum = new Server();
    }

    protected function refreshApplication()
    {
        $this->createsForumServer();

        $this->forum->setConfig([
            'url' => 'http://localhost',
            'debug' => true
        ]);

        $this->app = $this->forum->getApp();
    }
}
