<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramKemendikdasmen extends Model
{
    protected $table = 'program_kemendikdasmen';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
        'ringkasan',
        'isi_konten',
        'gambar_opsional',
    ];
}
