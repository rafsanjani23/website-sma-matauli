<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Pimpinan extends Model
{
    use HasTranslations;

    protected $table = 'pimpinan';

    protected $fillable = [
        'jabatan',
        'nama',
        'foto',
    ];

    public $translatable = ['jabatan'];
}
