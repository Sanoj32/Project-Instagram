<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(App\post::class, function (Faker $faker) {

    return [
        'caption'=>$faker->text(40),
        'image'=>'https://source.unsplash.com/random',
        'user_id'=>1,

    ];
});
