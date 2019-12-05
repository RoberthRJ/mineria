<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\JobType;
use Faker\Generator as Faker;

$factory->define(JobType::class, function (Faker $faker) {
    return [
        'type' => $faker->word
    ];
});
