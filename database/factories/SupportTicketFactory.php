<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SupportTicket;
use Faker\Generator as Faker;

$factory->define(SupportTicket::class, function (Faker $faker) {
    return [
        'question' => $faker->paragraph(),
    ];
});
