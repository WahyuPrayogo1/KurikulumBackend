<?php

use App\Jurusan;
use App\Guru;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Jurusan::class,20)->create();
        factory(Guru::class,20)->create();
    }
}
