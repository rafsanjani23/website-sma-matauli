<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kemitraan extends Model
{
    protected $table = 'kemitraan';

    protected $fillable = [
        'nama_mitra',
        'penjelasan_singkat',
        'gambar_mitra',
        'gambar_kegiatan',
        'ringkasan_kegiatan',
    ];
}
