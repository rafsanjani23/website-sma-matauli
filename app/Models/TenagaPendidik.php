<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class TenagaPendidik extends Model
{
    use HasTranslations;

    protected $table = 'tenaga_pendidik';

    protected $fillable = [
        'nama',
        'mata_pelajaran',
        'foto',
        'kategori',
    ];

    public $translatable = ['mata_pelajaran'];
}
