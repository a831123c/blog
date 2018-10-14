<?php

use Faker\Generator;
use Faker\Factory;

$factory->define(App\Models\Article::class, function (Faker\Generator $faker) {
    $faker = \Faker\Factory::create();
    return [
        'title' => $faker->text,
        'content' => $faker->sentence,
        'post_date' => \Carbon\Carbon::now()->addDays(rand(0,10)),
    ];
});
