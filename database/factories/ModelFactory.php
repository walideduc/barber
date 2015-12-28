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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Models\Shop::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'city' => $faker->city,
        'country' => $faker->country,
        'stateOrRegion' => $faker->randomDigit,
        'postalCode' => $faker->postcode,
        'phone_number' => $faker->phoneNumber,
        'email' => $faker->email,
        'site' => $faker->url,
        'appointment' => 'Recommandée',
        'description' => $faker->text(150),
    ];
});