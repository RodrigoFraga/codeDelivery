<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(CodeDelivery\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(CodeDelivery\Models\Categoria::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->word
    ];
});

$factory->define(CodeDelivery\Models\Cliente::class, function (Faker\Generator $faker) {
    return [
        'telefone' => $faker->phoneNumber,
        'endereco' => $faker->address,
        'cidade' => $faker->city,
        'estado' => $faker->state,
        'zipcode' => $faker->postcode,
    ];
});

$factory->define(CodeDelivery\Models\Produto::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->word,
        'descricao' => $faker->sentence,
        'preco' => $faker->numberBetween(10,50),
    ];
});

$factory->define(CodeDelivery\Models\Order::class, function (Faker\Generator $faker) {
    return [
        'cliente_id' => rand(1, 10),
        'total' => rand(50, 100),
        'status' => 0,
    ];
});

$factory->define(CodeDelivery\Models\OrderItem::class, function (Faker\Generator $faker) {
    return [
        
    ];
});

$factory->define(CodeDelivery\Models\Cupom::class, function (Faker\Generator $faker) {
    return [
        'code' => rand(100, 10000),
        'value' => rand(50, 100),
    ];
});
