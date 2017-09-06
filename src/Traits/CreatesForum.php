<?php

namespace Flagrow\Steamroller\Traits;

use Flarum\Forum\Server;
use Flarum\Foundation\Application;
use Flarum\Install\Console\DefaultsDataProvider;
use Flarum\Install\Console\InstallCommand;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Output\StreamOutput;

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

    protected function installsForum()
    {
        /** @var InstallCommand $command */
        $command = $this->app->make(InstallCommand::class);
        $data = new DefaultsDataProvider();
        $command->setDataSource($data);

        $body = fopen('php://temp', 'wb+');
        $input = new StringInput('');
        $output = new StreamOutput($body);

        $command->run($input, $output);
    }

    protected function refreshApplication()
    {
        $this->createsForumServer();

        $this->forum->setConfig([
            'url' => 'http://localhost',
            'debug' => true
        ]);

        $this->app = $this->forum->getApp();
        $this->installsForum();
    }
}
