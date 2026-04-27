<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ProgramIb extends Model
{
    use HasTranslations;

    protected $table = 'program_ib';

    protected $fillable = [
        'judul',
        'gambar',
        'ringkasan',
        'isi_konten',
        'gambar_opsional',
    ];

    public $translatable = ['judul', 'ringkasan', 'isi_konten'];
}
