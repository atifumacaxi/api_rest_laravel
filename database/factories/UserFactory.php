<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use \Illuminate\Support\Facades\Hash;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => 'Joshua',
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'city' => 'Sao Paulo',
        'state' => 'SP',
        'password' => Hash::make($faker->firstName)
    ];
});
