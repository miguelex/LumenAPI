<?php

$factory->define(App\Profesor::class, function ($faker) {
    return [
        'nombre' => $faker->name,
        'direccion' => $faker->address,
        'telefono' => $faker->phoneNumber,
        'profesion' => $faker->randomElement($array = array ('ingeniería','matemática','física')),
    ];
});
$factory->define(App\Estudiante::class, function ($faker) {
    return [
        'nombre' => $faker->name,
        'direccion' => $faker->address,
        'telefono' => $faker->phoneNumber,
        'carrera' => $faker->randomElement($array = array ('ingeniería','matemática','física')),
    ];
});
$factory->define(App\Curso::class, function ($faker) {
    return [
        'titulo' => $faker->sentence(4),
        'descripcion' => $faker->paragraph(4),
		'valor' => $faker->numberBetween(1,4),
        'profesor_id' => mt_rand(1, 50),
    ];
});