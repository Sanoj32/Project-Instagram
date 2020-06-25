<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(App\post::class, function (Faker $faker) {

    return [
        'caption'=>$faker->text(40),
        'image'=>'https://via.placeholder.com/1200.png',  // image path
        'user_id'=>1, // insert which user id to seed posts in here

    ];
});


