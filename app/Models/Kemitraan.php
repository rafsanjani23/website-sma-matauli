<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Kemitraan extends Model
{
    use HasTranslations;

    protected $table = 'kemitraan';

    protected $fillable = [
        'nama_mitra',
        'penjelasan_singkat',
        'gambar_mitra',
        'gambar_kegiatan',
        'ringkasan_kegiatan',
    ];

    public $translatable = ['nama_mitra', 'penjelasan_singkat', 'ringkasan_kegiatan'];
}
