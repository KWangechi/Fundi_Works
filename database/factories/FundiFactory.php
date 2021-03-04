<?php

use Faker\Generator as Faker;

$factory->define(\App\Fundi::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'image' => $faker->image('public/storage/uploads',400,300, null, false) ,
        'age' => $faker->age,
        'occupation' => $faker->occupation,
    ];
});
