<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Jurusan;
use Faker\Generator as Faker;

$factory->define(Jurusan::class, function (Faker $faker) {
    return [
        'nama_jurusan'  =>  $faker->name,
        'deskripsi'     =>  $faker->name,
    ];
});
