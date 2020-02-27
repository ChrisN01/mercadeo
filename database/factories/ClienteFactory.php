<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Cliente::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'cedula' => $faker->text(45),
        'nombre' => $title,
        'apellido' => $faker->text(45),
        'direccion' => $faker->text(200),
        'telefono' => $faker->text(45),
        'licencia_id' => rand(1,5),
        'usuario_id' => rand(1,20),


    ];
});
