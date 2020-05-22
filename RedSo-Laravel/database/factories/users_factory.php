<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'usuario'=>$faker->userName, 
        'email' => $faker->unique()->safeEmail,
        'nombre' =>$faker->firstName($gender = null), 
        'apellido' =>$faker->lastName,
        'cumpleanios' =>$faker->date($format = 'Y-m-d', $max = 'now'),
        'ciudad' =>$faker->city,
        // 'foto_perfil' =>$faker->image($dir = '/tmp', $width = 400, $height = 400, ['selfie'], true), 
        'password' =>$faker->password
    ];
});
