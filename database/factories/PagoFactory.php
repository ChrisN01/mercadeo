<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Pago::class, function (Faker $faker) {
    return [
        'fecha' => $faker->date('Y-m-d', 'now'),
        'costo' => $faker->randomFloat(NULL, 0, 200),
        'licencia_id' => rand(1,20),
    ];
});
