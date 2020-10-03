<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Organization;
use Faker\Generator as Faker;

$factory->define(Organization::class, function (Faker $faker) {
    return [
        'no_organization' => $faker->company,
        'razao_social' => $faker->unique()->firstName() . '.LTDA',
        'no_representante' => $faker->name(),
        'email' => $faker->unique()->safeEmail,
        'password' => $faker->password(8, 20),
        'cnpj' => $faker->unique()->isbn13,
        'causa_soc' => json_encode($faker->randomElements([
            'Assistência a Refugiados',
            'Criançasvítimas de abuso',
            'Pessoas em situação de rua',
            'Mulheres vítimas de violência',
            'Crianças desaparecidas',
            'Animais abandonados',
            'Crianças fora da Escola',
            'Idosos',
            'Pessoas com deficiência',
            'Direitos Humanos'
        ])),
        'ds_atividades' => $faker->text(255),
        'dt_fundacao' => $faker->date()
    ];
});
