<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Brand::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'logoUrl' => $faker->imageUrl($width=1200, $height=400),
        'description' => $faker->sentence,
        'slug' => $faker->sentence
    ];
});
