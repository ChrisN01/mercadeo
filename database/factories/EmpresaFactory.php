<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Empresa::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'rif' => $faker->text(45),
        'nombre' => $title,
        'direccion' => $faker->text(200),
        'telefono' => $faker->text(45),
        'licencia_id' => rand(1,10),
        'usuario_id' => rand(1,20),
    ];
});
