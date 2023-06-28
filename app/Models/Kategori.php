<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategori";

    public function kuesioner()
    {
        return $this->hasMany('App\Models\Kuesioner', 'id_kategori');
    }
}
