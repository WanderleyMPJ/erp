<?php

use Faker\Generator as Faker;

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

$factory->define(App\Model\Cadastro\PessoaGrupo::class, function (Faker $faker) 
{
    return 
    [
        'descricao' => $faker->title
    
    ];
});


$factory->define(App\Model\Cadastro\Pessoa::class, function (Faker $faker) 
{
    return [
        'nome' => $faker->company,
        'cnpj_cpf' =>  $faker->cnpj(),
        'fantasia' =>$faker->company,
        'tipo_pessoa'=>'juridica',
        'rg_inscest' => $faker->randomDigit,
        'ativo'=> 1
    ];
});

$factory->define(App\Model\Cadastro\PessoaContato::class, function (Faker $faker) {
    return [
        'descricao' => $faker->company,
        'telefone' => $faker->phoneNumber,
        'email' => $faker->email,    
    ];
});

$factory->define(App\Model\Cadastro\PessoaXContatos::class, function (Faker $faker) {
    return [
/*        'pessoa_id' => function () {
            return factory(App\Model\Cadastro\Pessoa::class)->create()->id;},
  */      'pessoacontatos_id'=> function () {
            return factory(App\Model\Cadastro\PessoaContatos::class)->create()->id;}            
];
});

$factory->define(App\Model\Cadastro\PessoaEndereco::class, function (Faker $faker) {
    return 
    [
        'descricao' => $faker->company,
        'logradouro' => $faker->address,
        'uf'=> 'RO',
        'Cidade' => 'Porto Velho'
 /*       ,
        'pessoa_id' => function () {
            return factory(App\Model\Cadastro\Pessoa::class)->create()->id;}
 */   
    ];
});
