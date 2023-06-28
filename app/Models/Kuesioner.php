<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kuesioner extends Model
{
    protected $table = "kuesioner";
    protected $primaryKey = "id_kuesioner";
    protected $fillable = [
        'nama_kuesioner','id_periode','status'
    ];

    public function periode()
    {
        return $this->belongsTo('App\Models\Periode', 'id_periode', 'id_periode');
    }
    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori', 'id_kategori','id_kategori');
    }
    public function prodi()
    {
        return $this->belongsTo('App\Models\Prodi', 'id_prodi','id_prodi');
    }
    public function pertanyaan()
    {
        return $this->hasMany('App\Models\Pertanyaan','id_kuesioner');
    }
}
