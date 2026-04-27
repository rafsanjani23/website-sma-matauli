<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class BerandaProgramKemataulian extends Model
{
    use HasTranslations;

    protected $table = 'beranda_program_kemataulian';

    protected $fillable = [
        'judul',
        'ringkasan',
        'foto',
    ];

    public $translatable = ['judul', 'ringkasan'];
}
