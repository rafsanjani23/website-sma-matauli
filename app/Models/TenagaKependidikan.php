<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class TenagaKependidikan extends Model
{
    use HasTranslations;

    protected $table = 'tenaga_kependidikan';

    protected $fillable = [
        'nama',
        'jabatan',
        'foto',
    ];

    public $translatable = ['jabatan'];
}
