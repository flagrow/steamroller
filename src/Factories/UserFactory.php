<?php

namespace Flagrow\Steamroller\Factories;

use Faker\Generator as Faker;
use Flarum\User\User;

$factory->define(User::class, function (Faker $faker) {
    return [
        'username' => $faker->userName,
        'email' => $faker->email,
        'is_email_confirmed' => true,
        'password' => $faker->password,
    ];
});

$factory->state(User::class, 'unconfirmed', function (Faker $faker) {
    return [
        'is_email_confirmed' => false,
    ];
});
