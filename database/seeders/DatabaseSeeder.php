<?php

use Database\Seeders\TesSeeder;
use Database\Seeders\ProdiSeeder;
use Database\Seeders\MahasiswaDummy;
use Database\Seeders\KategoriSeeder;
use Database\Seeders\UserSeeder;
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
        // $this->call(TesSeeder::class);
        $this->call(ProdiSeeder::class);
        // $this->call(MahasiswaDummy::class);
        $this->call(KategoriSeeder::class);
        $this->call(UserSeeder::class);

    }
}
