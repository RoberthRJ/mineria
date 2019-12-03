<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Offert;
use Faker\Generator as Faker;

$factory->define(Offert::class, function (Faker $faker) {
	$title = $faker->sentence;
    return [
        'company_id' => App\Company::all()->random()->id,
        'category_id' => App\Category::all()->random()->id,
        'location_id' => App\Location::all()->random()->id,
        'area_id' => App\Area::all()->random()->id,
        'title' => $title,
        'description' => $faker->paragraph,
        'slug' => str_slug($title, '-'),
        'expiration_date' => $faker->dateTimeInInterval('now', '+ 40 days', 'America/Lima')
    ];
});
