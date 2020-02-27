<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Producto::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'nombre' => $title,
        'marca' => $faker->text(45),
        'color' => $faker->text(45),
        'genero' => $faker->text(45),
        'fechaVencimiento' => $faker->date('Y-m-d', 'now'),
        'descripcion' => $faker->text(200),
        'categoria_id' => rand(1,20),
        'empresa_id' => rand(1,20),
        'slug' => str_slug($title),
    ];
});
