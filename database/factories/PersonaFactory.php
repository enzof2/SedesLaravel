<?php
use App\Persona;
use Faker\Generator as Faker;

$factory->define(Persona::class, function (Faker $faker) {
    return [
    	'name' => $faker->name,
    	'lastname'=>$faker->lastname,
    	'dni'=>$faker->dni,
    	'telf'=>$faker->randomnumber(6),
		'fechanac'=> $faker->date($format='Y-m-d', $max='now'),
    ];
});
