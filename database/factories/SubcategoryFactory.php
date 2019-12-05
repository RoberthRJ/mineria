<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Subcategory;
use Faker\Generator as Faker;

$factory->define(Subcategory::class, function (Faker $faker) {
    return [
    	'category_id' => App\Category::all()->random()->id,
        'subcategory' => $faker->word
    ];
});
