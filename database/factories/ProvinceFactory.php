<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Province;
use Faker\Generator as Faker;

$factory->define(Province::class, function (Faker $faker) {
    return [
        'department_id' => App\Department::all()->random()->id,
        'province' => $faker->word
    ];
});
