<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Oferta::class, function (Faker $faker) {
    return [
        'FechaEmision' => $faker->date('Y-m-d', 'now'),
        'busqueda' => $faker->text(200),
        'cliente_id' => rand(1,20),
    ];
});
