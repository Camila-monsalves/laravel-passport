<?php

namespace Database\Factories;
use App\Empleo;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

$factory->define(Empleo::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'nombre_empleo' => $faker->name,
        'detalle_empleo' => $faker->sentence(4),
        'direccion_empleo' => $faker -> address,
        'comuna_empleo' => $faker->secondaryAddress,
        'region_empleo' => $faker->state,
        'categoria' => rand(1,2),
        'sueldo' => rand(300000,500000),
        'horario' => rand(1,9),
        'curriculum' =>$faker->sentence(1),
        
        
    ];
});
