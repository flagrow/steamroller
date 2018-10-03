<?php

namespace Flagrow\Steamroller\Tests;

use Flagrow\Steamroller\TestCase;
use Flarum\Foundation\InstalledSite;
use Illuminate\Database\ConnectionInterface;

class ForumTest extends TestCase
{
    /**
     * @test
     */
    public function is_installed_by_default()
    {
        $this->assertEquals(InstalledSite::class, get_class($this->site));
    }

    /**
     * @test
     */
    public function has_working_database_connection()
    {
        /** @var ConnectionInterface $connection */
        $connection = app(ConnectionInterface::class);

        $this->assertGreaterThan(0, $connection->table('migrations')->count());
    }
}
