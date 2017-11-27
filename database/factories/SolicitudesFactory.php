<?php

use Faker\Generator as Faker;

$factory->define(\App\Dbrequest::class, function (Faker $faker) {
    return [
        //'ubicacion', 'servicio', 'area','prioridad','category','subcategory','type','description','estado'
        'ubicacion' => $faker->city ,
        'servicio' =>$faker->numberBetween(1,2),
        'area' => $faker->department,
        'prioridad' => 'Normal',
        'category' => $faker->numberBetween(1,4),
        'subcategory' => $faker->numberBetween(1,10),
        'type' => $faker->numberBetween(1,3),
        'description' => $faker->sentence(80),
        'estado' => '1',
        'remember_token' => str_random(10),

    ];
});
