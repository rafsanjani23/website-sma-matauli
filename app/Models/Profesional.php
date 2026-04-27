<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Profesional extends Model
{
    use HasTranslations;

    protected $table = 'profesional';

    protected $fillable = [
        'nama',
        'nama_lembaga',
        'angkatan',
        'foto',
        'link_facebook',
        'link_twitter',
        'link_linkedin',
    ];

    public $translatable = ['nama_lembaga'];
}
