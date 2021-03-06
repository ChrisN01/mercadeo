<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Licencia::class, function (Faker $faker) {
    $title = $faker->unique()->word(5);
    return [
        'nombre' => $title,
        'costo' => $faker->randomFloat(NULL, 0, 200),
        'ventaja' => $faker->text(200),
        'descripcion' => $faker->text(200),
        'tiempoDeUso' => $faker->text(45),
        'tipo' => $faker->text(45),
        'caracteristicas' => $faker->text(200),
        'cantidadProducto' => $faker->text(45),
        'fechaCompra' => $faker->date('Y-m-d', 'now'),
        'fechaExpiracion' => $faker->date('Y-m-d', 'now'),
        'administrador_id' => rand(1,2),
    ];
});
