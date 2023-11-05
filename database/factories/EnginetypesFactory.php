<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\enginetypes;
use Faker\Generator as Faker;

$factory->define(enginetypes::class, function (Faker $faker) {
    return [
        'engine_type_name' =>  $faker->name(),
        'created_at' =>  $faker->dateTime(),
        'updated_at' =>  $faker->dateTime(),
    ];
});
