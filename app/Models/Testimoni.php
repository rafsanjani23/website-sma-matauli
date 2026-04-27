<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Testimoni extends Model
{
    use HasTranslations;

    protected $table = 'testimoni';

    protected $fillable = [
        'nama',
        'tahun_alumni',
        'foto',
        'isi',
    ];

    public $translatable = ['isi'];
}
