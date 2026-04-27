<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ProgramKemendikdasmen extends Model
{
    use HasTranslations;

    protected $table = 'program_kemendikdasmen';

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
