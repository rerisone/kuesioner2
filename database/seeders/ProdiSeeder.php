<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prodi')->insert([
            'kode_prodi' => '41010',
            'nama_prodi' => 'S1 Sistem Informasi'
        ]);
        DB::table('prodi')->insert([
            'kode_prodi' => '41011',
            'nama_prodi' => 'S1 Teknik Komputer'
        ]);
        DB::table('prodi')->insert([
            'kode_prodi' => '41012',
            'nama_prodi' => 'S1 Desain Komunikasi Visual'
        ]);
        DB::table('prodi')->insert([
            'kode_prodi' => '41013',
            'nama_prodi' => 'D3 Sistem Informasi'
        ]);
        DB::table('prodi')->insert([
            'kode_prodi' => '41014',
            'nama_prodi' => 'D4 Produksi Film & Televisi'
        ]);
        DB::table('prodi')->insert([
            'kode_prodi' => '41014',
            'nama_prodi' => 'S1 Manajemen'
        ]);
        DB::table('prodi')->insert([
            'kode_prodi' => '41015',
            'nama_prodi' => 'S1 Akuntansi'
        ]);
    }
}
