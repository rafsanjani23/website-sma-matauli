<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Ekstrakurikuler extends Model
{
    use HasTranslations;

    protected $table = 'ekstrakurikuler';

    protected $fillable = [
        'nama',
        'gambar',
    ];

    public $translatable = ['nama'];
}
