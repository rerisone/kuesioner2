<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = "prodi";

    public function kuesioner()
    {
        return $this->hasMany('App\Models\Kuesioner', 'id_prodi');
    }
    public function mahasiswa()
    {
        return $this->hasMany('App\Models\Mahasiswa', 'id_prodi');
    }
}
