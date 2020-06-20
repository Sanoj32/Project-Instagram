<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(App\post::class, function (Faker $faker) {

    return [
        'caption'=>$faker->text(40),
        'image'=>$faker->imageUrl($width = 640, $height = 480),
        'user_id'=>1,

    ];
});
