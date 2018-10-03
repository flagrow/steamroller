<?php

namespace Flagrow\Steamroller\Factories;

use Faker\Generator as Faker;
use Flarum\Discussion\Discussion;
use Flarum\User\User;

$factory->define(Discussion::class, function (Faker $faker) {
    return [
        'title' => $faker->text(100),
        'user_id' => function () {
            return factory(User::class)->create()->id;
        }
    ];
});
