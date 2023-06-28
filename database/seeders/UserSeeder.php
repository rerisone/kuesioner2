<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role' => 'kaprodi',
            'username' => 'kaprodi',
            'password' => bcrypt('kaprodi'),
        ]);
        DB::table('users')->insert([
            'role' => 'dekan',
            'username' => 'dekan',
            'password' => bcrypt('dekan'),
        ]);
        DB::table('users')->insert([
            'role' => 'mahasiswa',
            'username' => 'mahasiswa',
            'password' => bcrypt('mahasiswa'),
        ]);
    }
}
