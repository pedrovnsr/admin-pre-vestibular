<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Aluno;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Aluno::class, function (Faker $faker) {
    return [
        'fez_enem' => $faker->boolean(),
        'tipo_escola' => $faker->boolean(),
        'data_nascimento' => $faker->date($format = 'd-m-Y', $max = '31-12-2007'),
        'numero' => $faker->buildingNumber(),
        'ano_conclusao' => $faker->year($max = 'now'),
        'bairro' => $faker->streetSuffix(),
        'cidade' => $faker->city(),
	'complemento' => $faker->secondaryAddress(),
        'email' => $faker->unique()->safeEmail,
        'email_responsavel' => $faker->safeEmail,
        'nome' => $faker->name(),
        'nome_responsavel' => $faker->name(),
        'escola' => $faker->lexify('Escola ???? ??????'),
	'rua' => $faker->streetName(),
        'telefone' => $faker->phoneNumber(),
        'telefone_responsavel' => $faker->phoneNumber()
        #$table->integer('turma_id')->unsigned()->nullable();
        #$table->foreign('turma_id')->references('id')->on('turmas');
    ];
});
