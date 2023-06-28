<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert([
            'kategori' => 'Keandalan (Reliability)',
            'keterangan' => 'kemampuan dosen, tenaga kependidikan, dan pengelola dalam memberikan pelayanan.'
        ]);
        DB::table('kategori')->insert([
            'kategori' => 'Daya tanggap (Responsiveness)',
            'keterangan' => 'kemauan dari dosen, tenaga kependidikan, dan pengelola dalam membantu mahasiswa dan memberikan jasa dengan cepat.'
        ]);
        DB::table('kategori')->insert([
            'kategori' => 'Kepastian (Assurance)',
            'keterangan' => 'kemampuan dosen, tenaga kependidikan, dan pengelola untuk memberi keyakinan kepada mahasiswa bahwa pelayanan yang diberikan.'
        ]);
        DB::table('kategori')->insert([
            'kategori' => 'Empati (Empathy)',
            'keterangan' => 'kesediaan/kepedulian dosen, tenaga kependidikan, dan pengelola untuk memberi perhatian kepada mahasiswa.'
        ]);
        DB::table('kategori')->insert([
            'kategori' => 'Nyata (Tangible)',
            'keterangan' => 'penilaian mahasiswa terhadap kecukupan, aksesibitas, kualitas sarana dan prasarana.'
        ]);
    }
}
