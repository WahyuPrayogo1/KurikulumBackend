<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Guru;
use Faker\Generator as Faker;

$factory->define(Guru::class, function (Faker $faker) {
    return [
        'nama_guru'         => $faker->name,
        'jabatan_guru'      => $faker->name,
        'alamat'            => $faker->address,
        'status_pendidikan' => $faker->name,
    ];
});
