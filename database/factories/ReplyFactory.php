<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Conversation;
use App\Reply;
use App\User;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraph,
    ];
});
