<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Posteo;
use Faker\Generator as Faker;

$factory->define(Posteo::class, function (Faker $faker) {
    return [
        'contenido' => $faker->paragraph(50),
        'nombreImagen'=>$faker->imageUrl($width = 640, $height = 480), 
        'user_id' =>$faker->numberBetween($min = 1, $max = 401), 
        'fechaCreacion' =>$faker->dateTime($max = 'now', $timezone = null)
    ];
});
