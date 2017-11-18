<?php

use Faker\Generator as Faker;

$factory->define(App\Models\WishList::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});
