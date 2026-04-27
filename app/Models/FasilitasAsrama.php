<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class FasilitasAsrama extends Model
{
    use HasTranslations;

    protected $table = 'fasilitas_asrama';

    protected $fillable = [
        'nama',
        'gambar',
    ];

    public $translatable = ['nama'];
}
