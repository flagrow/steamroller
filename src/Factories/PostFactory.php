<?php

namespace Flagrow\Steamroller\Factories;

use Faker\Generator as Faker;
use Flarum\Discussion\Discussion;
use Flarum\Post\CommentPost;
use Flarum\User\User;

$factory->define(CommentPost::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'discussion_id' => function () {
            return factory(Discussion::class)->create()->id;
        },
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
        'content' => $faker->text()
    ];
});
