<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Proffesional;
use Faker\Generator as Faker;

$factory->define(Proffesional::class, function (Faker $faker) {
	$name = $faker->name;
	$last_name = $faker->lastName;
    return [
        'user_id' => App\User::all()->random()->id,
        'name' => $name,
        'last_name' => $last_name,
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'slug' => str_slug($name." ".$last_name, '-')
    ];
});
