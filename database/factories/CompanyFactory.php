<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
	$title = $faker->word;
    return [
        'user_id' => App\User::all()->random()->id,
        'title' => $title,
        'biography' => $faker->sentence,
        'website' => $faker->url,
        'slug' => str_slug($title, '-')
    ];
});
