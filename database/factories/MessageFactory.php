<?php

use App\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'message' => $faker->text(255),
        'color_id' => $faker->numberBetween(0, 7)
    ];
});
