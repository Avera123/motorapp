<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Coupon::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'imgUrl' => $faker->imageUrl($width=1200, $height=400),
        'description' => $faker->sentence,
        'startDate' => $faker->dateTime()->format('Y-m-d'),
        'endingDate' => $faker->dateTime()->format('Y-m-d'),
        'active' => $faker->boolean(),
        'idBrand' => rand(1,4)
    ];
});
