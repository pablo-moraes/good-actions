<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'ds_cep' => $faker->postcode,
        'ds_endereco' => $faker->address,
        'ds_cidade' => $faker->city,
        'ds_bairro' => array_rand(['Bairro do Limoeiro', 'Cozinha do Inferno', 'Rua 0 bit', 'Brooklyn', 'Kabukicho']),
        'ds_UF' => array_rand(['AC', 'AL', 'AM', 'AP', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PI', 'RJ', 'RN', 'RO', 'RS', 'RR', 'SC', 'SE', 'SP', 'TO'])
    ];
});