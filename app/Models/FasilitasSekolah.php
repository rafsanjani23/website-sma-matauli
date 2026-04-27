<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class FasilitasSekolah extends Model
{
    use HasTranslations;

    protected $table = 'fasilitas_sekolah';

    protected $fillable = [
        'nama',
        'gambar',
        'kategori',
    ];

    public $translatable = ['nama'];
}
