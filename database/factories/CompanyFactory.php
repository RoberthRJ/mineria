<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'user_id' => App\User::all()->random()->id,
        'title' => $faker->word,
        'biography' => $faker->sentence,
        'website' => $faker->url
    ];
});
