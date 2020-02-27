<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Administrador::class, function (Faker $faker) {
    return [
        'cedula' => $faker->text(45),
        'nombre' => $faker->text(45),
        'apellido' => $faker->text(45),
        'direccion' => $faker->text(200),
        'telefono' => $faker->text(45),
        'usuario_id' => rand(1,2),
    ];
});
