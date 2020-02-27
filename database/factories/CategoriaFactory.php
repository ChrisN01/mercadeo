<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Categoria::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'nombre' => $title,
        'descripcion' => $faker->text(255),
        'slug' => str_slug($title),
    
    ];
});
