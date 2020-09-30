<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\post;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {

    return [
        'caption' => $faker->text(40), // generates a text with 40 chars max
        'image' => 'https://via.placeholder.com/1200.png', // image path
        'user_id' => 1, // insert which user id to seed posts in here

    ];
});
