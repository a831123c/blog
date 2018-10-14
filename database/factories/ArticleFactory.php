<?php

//use Faker\Generator as Faker;
use Faker\Factory;
$faker = Faker\Factory::create('en_US');
$factory->define(\App\Models\Article::class, function ($faker) {
    return [
        'title' => $faker->text,
        'content' => $faker->sentence,
        'post_date' => \Carbon\Carbon::now()->addDays(rand(0,10)),
    ];
});
