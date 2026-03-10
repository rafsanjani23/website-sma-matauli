<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KegiatanAsrama extends Model
{
    protected $table = 'kegiatan_asrama';

    protected $fillable = [
        'nama',
        'gambar',
    ];
}
