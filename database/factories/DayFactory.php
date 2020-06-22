<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Day;
use Faker\Generator as Faker;

$factory->define(Day::class, function (Faker $faker) {
    return [
        
        'name' => $faker->name,
        'phone' => rand(),
        'file_id' => 1,
    ];
});
