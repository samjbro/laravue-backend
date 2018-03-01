<?php

use Faker\Generator as Faker;

$factory->define(\App\Category::class, function (Faker $faker) {
    return [
        'name' => ucwords($faker->words(random_int(1, 4), true)),
    ];
});
