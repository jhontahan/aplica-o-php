<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SiteContato;
use Faker\Generator as Faker;
use \App\MotivoContato;

$factory->define(SiteContato::class, function (Faker $faker) {
    $m = MotivoContato::find(1);
    return [
        'nome' => $faker->name,
        'telefone' => $faker->tollFreePhoneNumber,
        'email' => $faker->unique()->email,
        'motivo_contatos_id' => $m,
        'mensagem' => $faker->text(200)
    ];
});
