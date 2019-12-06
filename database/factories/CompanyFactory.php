<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
	$title = $faker->word;
	$links = '';
    return [
        'user_id' => App\User::all()->random()->id,
        'title' => $title,
        'biography' => $faker->sentence,
        'links' => $links,
        'address' => $faker->address,
        'slug' => str_slug($title, '-'),
        'sector_id' => App\Sector::all()->random()->id,
    ];
});
