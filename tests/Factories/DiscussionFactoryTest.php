<?php

namespace Flagrow\Steamroller\Tests\Factories;

use Flagrow\Steamroller\TestCase;
use Flarum\Discussion\Discussion;

class DiscussionFactoryTest extends TestCase
{
    /**
     * @test
     */
    public function can_create_discussions()
    {
        /** @var Discussion $discussion */
        $discussion = factory(
            Discussion::class
        )->create();

        $this->assertTrue($discussion->exists);
        $this->assertNotNull($discussion->title);
    }
}
