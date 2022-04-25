<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Location;
use Faker\Generator as Faker;

$factory->define(Location::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->name,
        'location_img'=>$faker->imageUrl($width = 640, $height = 480)
    ];
});
