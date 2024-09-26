<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
	protected $table = "mobil";
   protected $primaryKey= 'id_mobil';
   protected $fillable = [
        'id_mobil','nama_mobil', 'merek', 'kategori', 'Harga', 'Tahun',
    ];
}
