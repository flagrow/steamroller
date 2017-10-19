<?php

namespace Flagrow\Steamroller\Traits;

use Flarum\Forum\Server;
use Flarum\Foundation\Application;
use Flarum\Install\Console\DataProviderInterface;
use Flarum\Install\Console\DefaultsDataProvider;
use Flarum\Install\Console\InstallCommand;
use Flarum\Install\InstallServiceProvider;
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

    protected function installsForum(DataProviderInterface $data)
    {
        $this->app->register(InstallServiceProvider::class);
        /** @var InstallCommand $command */
        $command = $this->app->make(InstallCommand::class);

        $command->setDataSource($data);

        $body = fopen('php://temp', 'wb+');
        $input = new StringInput('');
        $output = new StreamOutput($body);

        $command->run($input, $output);
    }

    protected function refreshApplication()
    {
        $this->createsForumServer();

        $data = new DefaultsDataProvider();

        $database = $data->getDatabaseConfiguration();
        $database['password'] = '';
        $database['charset'] = 'utf8mb4';
        $database['collation'] = 'utf8mb4_unicode_ci';

        $data->setDatabaseConfiguration($database);

        $this->forum->setConfig([
            'url' => $data->getBaseUrl(),
            'debug' => true,
            'database' => $data->getDatabaseConfiguration()
        ]);

        $this->app = $this->forum->getApp();
        $this->installsForum($data);
    }
}
