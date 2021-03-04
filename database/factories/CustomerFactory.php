<?php

use Faker\Generator as Faker;

$factory->define(\App\Customer::class, function (Faker $faker) {
    return [
    'name' => $faker->name,
    'address' => $faker->address,
    'phone' => $faker->phoneNumber,
    'date' => $faker->date,
    'time' => $faker->time,
    ];
});
