<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    protected $primaryKey = "id_periode";
    protected $table = "periode";
    protected $fillable = [
        'periode_kuesioner','tanggal_buka','tanggal_tutup'
    ];

    public function kuesioner()
    {
        return $this->hasMany('App\Models\Kuesioner', 'id_periode');
    }
}
