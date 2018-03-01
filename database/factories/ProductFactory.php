<?php

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => ucwords($faker->words(random_int(1, 4), true)),
        'desc1' => $faker->sentence,
        'manufacturer_part_no' => $faker->randomNumber(8),
        'price' => $faker->numberBetween(500,100000),
        'category_id' => function() {
            return factory(\App\Category::class)->create()->id;
        }
    ];
});
