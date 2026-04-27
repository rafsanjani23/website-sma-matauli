<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class KegiatanAsrama extends Model
{
    use HasTranslations;

    protected $table = 'kegiatan_asrama';

    protected $fillable = [
        'nama',
        'kategori',
        'gambar',
    ];

    public $translatable = ['nama'];
}
