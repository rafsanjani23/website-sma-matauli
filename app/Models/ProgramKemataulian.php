<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ProgramKemataulian extends Model
{
    use HasTranslations;

    protected $table = 'program_kemataulian';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
        'ringkasan',
        'isi_konten',
        'gambar_opsional',
    ];

    public $translatable = ['judul', 'deskripsi', 'ringkasan', 'isi_konten'];
}
