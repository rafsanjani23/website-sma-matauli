<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Foto extends Model
{
    use HasTranslations;

    protected $table = 'foto';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
    ];

    public $translatable = ['judul', 'deskripsi'];
}
