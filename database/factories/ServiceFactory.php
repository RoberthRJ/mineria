<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
	$title = $faker->sentence;
    return [
        'company_id' => App\Company::all()->random()->id,
        'category_id' => App\Category::all()->random()->id,
        'location_id' => App\Location::all()->random()->id,
        'title' => $title,
        'description' => $faker->paragraph,
        'slug' => str_slug($title, '-')
    ];
});
