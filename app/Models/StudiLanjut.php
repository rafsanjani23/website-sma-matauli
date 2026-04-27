<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class StudiLanjut extends Model
{
    use HasTranslations;

    protected $table = 'studi_lanjut';

    protected $fillable = [
        'nama_alumni',
        'nama_lembaga',
        'kategori',
        'angkatan',
    ];

    public $translatable = ['nama_lembaga'];
}
