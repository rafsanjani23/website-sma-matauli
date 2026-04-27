<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class BerandaProgramIb extends Model
{
    use HasTranslations;

    protected $table = 'beranda_program_ib';

    protected $fillable = [
        'judul',
        'ringkasan',
        'foto',
    ];

    public $translatable = ['judul', 'ringkasan'];
}
