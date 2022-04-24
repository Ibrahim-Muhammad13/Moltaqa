<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Properties;
use App\Location;
use Faker\Generator as Faker;

$factory->define(Properties::class, function (Faker $faker) {
    return [
        //
        'location_id'=>1,
        'title'=>$faker->sentence,
        'adress'=>$faker->sentence,
        'image'=>$faker->imageUrl($width = 640, $height = 480),
        'price'=>$faker->randomDigit,
        'type'=>$faker->sentence,
        'status'=>$faker->sentence,
        'rooms'=>$faker->randomDigit,
        'bath'=>$faker->randomDigit
    ];
});
